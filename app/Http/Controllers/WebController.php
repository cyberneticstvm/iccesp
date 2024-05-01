<?php

namespace App\Http\Controllers;

use App\Mail\AbstractSubmissionEmail;
use App\Mail\PaperSubmissionEmail;
use App\Models\Abstracts;
use App\Models\Author;
use App\Models\Designation;
use App\Models\Paper;
use App\Models\StaffTheme;
use App\Models\Theme;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public $email;

    public function __construct()
    {
        $this->email = "iccesp2024@gmail.com";
        //$this->email = "cyberneticstvm@gmail.com";
    }

    public function abstractSubmitPage()
    {
        $themes = Theme::where('status', 1)->orderBy('name')->get();
        $designations = Designation::where('category', 'author')->orderBy('name')->get();
        return view('web.register', compact('themes', 'designations'));
    }

    public function abstractSubmit(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'doc' => 'required|mimes:doc,docx,pdf',
            'title' => 'required',
            'theme_id' => 'required',
        ]);
        $url = null;
        $mime = "";
        $data = [];
        if ($request->file('doc')) :
            $mime = $request->file('doc')->getClientMimeType();
            $url = uploadFile($request->file('doc'), $path = 'abstracts');
        endif;
        try {
            DB::transaction(function () use ($request, $url) {
                $abstract = Abstracts::create([
                    'abstract_id' => rand(10000, 99999),
                    'theme_id' => $request->theme_id,
                    'title' => $request->title,
                    'doc_url' => $url,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'status_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

                foreach ($request->name as $key => $author) :
                    if ($author) :
                        $data[] = [
                            'abstract_id' => $abstract->id,
                            'name' => $author,
                            'type' => ($key == 0) ? 'principal' : 'author',
                            'designation_id' => $request->designation[$key] ?? 0,
                            'institution' => $request->institution[$key] ?? NULL,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    endif;
                endforeach;
                Author::insert($data);
            });
            $abstract = Abstracts::latest()->first();
            $staff = User::where('role', 'staff')->where('id', StaffTheme::where('theme_id', $request->theme_id)->latest()->first()->user_id)->first();
            Mail::to($request->email)->cc($this->email)->cc($staff?->email ?? $this->email)->send(new AbstractSubmissionEmail($abstract, $mime));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Abstract submitted successfully!");
    }

    public function guidelines()
    {
        return view('web.guidelines');
    }

    public function paper()
    {
        return view('web.paper');
    }

    public function submitPaper(Request $request)
    {
        $this->validate($request, [
            'doc' => 'required|mimes:doc,docx,pdf',
            'payment_screenshot' => 'required|mimes:pdf,png,jpeg,jpg',
            'abstract_id' => 'required',
        ]);
        try {
            $abstract = Abstracts::where('abstract_id', $request->abstract_id)->where('status_id', 3)->firstOrFail();
            $paper = null;
            $payment = null;
            $mime = "";
            if ($request->file('doc')) :
                $mime = $request->file('doc')->getClientMimeType();
                $paper = uploadFile($request->file('doc'), $path = 'papers');
            endif;
            if ($request->file('payment_screenshot')) :
                $payment = uploadFile($request->file('payment_screenshot'), $path = 'payments');
            endif;
            $paper = Paper::create([
                'abstract_id' => $abstract->id,
                'status_id' => 1,
                'paper' => $paper,
                'payment' => $payment,
            ]);
            $staff = User::where('role', 'staff')->where('id', StaffTheme::where('theme_id', $abstract->theme_id)->latest()->first()->user_id)->first();
            Mail::to($abstract->email)->cc($this->email)->cc($staff?->email ?? $this->email)->send(new PaperSubmissionEmail($paper, $mime));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Paper submitted successfully!");
    }
}
