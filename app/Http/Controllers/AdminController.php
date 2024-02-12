<?php

namespace App\Http\Controllers;

use App\Models\Abstracts;
use App\Models\StaffTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Exception;

class AdminController extends Controller
{
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

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with("success", "User logged out successfully");
    }
}
