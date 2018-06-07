<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function about()
    {
        //return "working";
        return view('resume.about');
    }
}
