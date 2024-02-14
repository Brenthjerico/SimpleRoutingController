<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function aboutme()
    {
        $aboutme = "I am Me";
        return view('AboutMe', compact('aboutme'));
    }
}
