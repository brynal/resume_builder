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
    	//return $request->all();	
    	$this->validate($request,[
    		'first_name' => 'required|unique:abouts|max:100',
    		'middle_name' => 'nullable|max:100',
    		'last_name' => 'required',
    		'address' =>'required',
    		'email' =>'required|unique:abouts',
    		'telephone' => 'required',
    		'website' => 'nullable'
    		]);

    	return 'all good';
    }

}
