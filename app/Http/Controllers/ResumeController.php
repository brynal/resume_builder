<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function showAbout()
    {
        return view('resume.about');
    }

    public function saveAbout(Request $request)
    {
    	//dd($request);
    	return $request->all();	
    }

}
