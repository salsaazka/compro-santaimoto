<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/how-it-works', function () {
    return view('how_it_works');
});

Route::get('/copilot', function () {
    return view('copilot');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/career', function(){
    return view('careers');
});

// Route::get('/latest', function(){
//     return view('latest');
// });

Route::get('/test', function(){
    return view('testing');
});

Route::get('/enterprise', function(){
    return view('enterprise');
});



Route::get('/tes', function(){
    return view('layouts.master');
});

Route::get('/data', function(){
    return view('data');
});

Route::get('dashboard/data-form', [UserController::class, 'index']);
Route::resource('form', FormController::class);