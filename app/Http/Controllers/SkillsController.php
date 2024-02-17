<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skills()
    {
        $skills = ["I am currently enhancing my editing skills, so I can say I can edit videos and photos", "I can also fix motorcycles ", "I can eat a lot of foods :)", "Also have slight skill on web developing"];
        return view('Skills', compact('skills'));
    }
}
