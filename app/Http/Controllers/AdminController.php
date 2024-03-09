<?php

namespace App\Http\Controllers;

use App\Mail\AbstractStatusUpdateEmail;
use App\Models\Abstracts;
use App\Models\Author;
use App\Models\StaffTheme;
use App\Models\Status;
use App\Models\Theme;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Exception;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public $email;

    public function __construct()
    {
        $this->email = "iccesp2024@gmail.com";
        //$this->email = "cyberneticstvm@gmail.com";
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard')
                    ->withSuccess('User logged in successfully');
            }
            return redirect()->back()->with("error", "Invalid Credentials")->withInput($request->all());
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
    }

    public function dashboard()
    {
        $abstracts = [];
        if (Auth::user()->role == 'admin') :
            $abstracts = Abstracts::latest()->get();
        else :
            $abstracts = Abstracts::whereIN('theme_id', StaffTheme::where('user_id', Auth::id())->pluck('theme_id'))->get();
        endif;
        return view('admin.dashboard', compact('abstracts'));
    }

    public function staff()
    {
        $users = User::all();
        $themes = Theme::all();
        return view('admin.staff.index', compact('users', 'themes'));
    }

    public function staffcreate()
    {
        $themes = Theme::all();
        return view('admin.staff.create', compact('themes'));
    }

    public function staffstore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required',
            'themes' => 'required',
        ]);
        try {
            $input = $request->except(array('themes'));
            $input['password'] = bcrypt($request->password);
            $user = User::create($input);
            if ($request->themes) :
                $data = [];
                foreach ($request->themes as $key => $theme) :
                    $data[] = [
                        'user_id' => $user->id,
                        'theme_id' => $theme,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                endforeach;
                StaffTheme::insert($data);
            endif;
        } catch (Exception $e) {
            return back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('staff')->with("success", "Staff Created Successfully");
    }

    public function staffedit(string $id)
    {
        $user = User::findOrFail(decrypt($id));
        $themes = Theme::all();
        $staffthemes = Theme::whereIn('id', $user->themes->pluck('theme_id'))->pluck('id')->toArray();
        return view('admin.staff.edit', compact('themes', 'user', 'staffthemes'));
    }

    public function staffupdate(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'role' => 'required',
            'themes' => 'required',
        ]);
        try {
            $input = $request->except(array('themes'));
            $user = User::find($id);
            $input['password'] = ($request->password) ? bcrypt($request->password) : $user->getOriginal('password');
            $user->update($input);
            StaffTheme::where('user_id', $user->id)->delete();
            if ($request->themes) :
                $data = [];
                foreach ($request->themes as $key => $theme) :
                    $data[] = [
                        'user_id' => $user->id,
                        'theme_id' => $theme,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                endforeach;
                StaffTheme::insert($data);
            endif;
        } catch (Exception $e) {
            return back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('staff')->with("success", "Staff Updated Successfully");
    }

    public function staffdestroy(string $id)
    {
        User::findOrFail(decrypt($id))->delete();
        return redirect()->route('staff')->with("success", "Staff Deleted Successfully");
    }

    public function editUbstract(string $id)
    {
        $abstract = Abstracts::findOrFail(decrypt($id));
        $status = Status::all();
        return view('admin.abstract.edit', compact('abstract', 'status'));
    }

    public function updateUbstract(Request $request, string $id)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);
        $abstract = Abstracts::findOrFail($id);
        $abstract->update(['status_id' => $request->status]);
        if (in_array($request->status, [2, 3, 4]))
            Mail::to($abstract->email)->cc($this->email)->send(new AbstractStatusUpdateEmail($request));
        return redirect()->route('dashboard')->with("success", "Abstract status updated successfully");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with("success", "User logged out successfully");
    }
}
