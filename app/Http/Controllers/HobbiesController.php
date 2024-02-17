<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobbies()
    {
        $hobbies = ["Playing Drums", "Editing", "Fixing motorcycle", "Playing Guitar", "Playing games", "Traveling", "Photography", "Cooking", "Riding motorcycles and cars", "Eating"];
        return view('Hobbies', compact('hobbies'));
    }
}
