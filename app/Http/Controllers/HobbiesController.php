<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobbies()
    {
        $hobbies = ["Eating", "Sleeping", "Watching","Eating Again", "Gaming", "Also Eating", "And Eating", "Another Eating", "More Eating", "Lastly Eating"];
        return view('Hobbies', compact('hobbies'));
    }
}
