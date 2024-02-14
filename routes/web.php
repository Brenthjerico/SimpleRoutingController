<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\AboutMeController;

Route::get('/', [AboutMeController::class, 'aboutme']);
Route::get('/AboutMe', [AboutMeController::class, 'aboutme']);
Route::get('/Skills', [SkillsController::class, 'skills']);
Route::get('/Hobbies', [HobbiesController::class, 'hobbies']);