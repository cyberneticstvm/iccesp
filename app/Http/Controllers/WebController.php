<?php

namespace App\Http\Controllers;

use App\Models\Abstracts;
use App\Models\Author;
use App\Models\Designation;
use App\Models\Theme;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
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
            'doc' => 'required|mimes:doc,docx',
            'title' => 'required',
            'theme_id' => 'required',
        ]);
        $url = null;
        $data = [];
        if ($request->file('doc')) :
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
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Abstract submitted successfully!");
    }
}