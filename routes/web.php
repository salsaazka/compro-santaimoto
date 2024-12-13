<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Menampilkan file resources/views/home.blade.php
});
