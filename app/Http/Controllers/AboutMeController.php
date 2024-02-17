<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function aboutme()
    {
        $aboutme = "I am Brenth Jerico, a web developer with a passion for creating interactive and dynamic websites. In my free time, I enjoy playing video games, watching movies.";
        return view('AboutMe', compact('aboutme'));
    }
}
