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

Route::get('/career', function () {
    return view('careers');
});

// Route::get('/latest', function(){
//     return view('latest');
// });

Route::get('/test', function () {
    return view('testing');
});

Route::get('/enterprise', function () {
    return view('enterprise');
});


Route::middleware('isLogin')->group(function () {
    Route::get('dashboard/data-form', [UserController::class, 'index'])->name('dashboard');
});

Route::middleware('isGuest')->group(function () {
    Route::get('join/to/login', [UserController::class, 'login']);
    Route::post('login/post', [UserController::class, 'auth'])->name('login.store');
});


Route::get('/logout', [UserController::class, 'logout']);
Route::resource('form', FormController::class);
