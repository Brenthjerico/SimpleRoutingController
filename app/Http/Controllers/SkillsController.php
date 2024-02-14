<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skills()
    {
        $skills = ["I am an expert in doing nothing", "I can sleep for 24hrs a day", "I can eat all you can", "HTML"];
        return view('Skills', compact('skills'));
    }
}
