<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/AboutMe', function () {
    return view('AboutMe');
});

Route::get('/Skills', function () {
    return view('Skills');
});

Route::get('/Hobbies', function () {
    return view('Hobbies');
});