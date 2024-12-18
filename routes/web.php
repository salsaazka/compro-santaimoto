<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Menampilkan file resources/views/home.blade.php
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

Route::get('/latest', function(){
    return view('latest');
});

Route::get('/enterprise', function(){
    return view('enterprise');
});

