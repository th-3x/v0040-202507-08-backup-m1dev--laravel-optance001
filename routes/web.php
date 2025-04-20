<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
    // return view('comps.nav');
    // return view('comps.nav2');
});

Route::get('/about', function () {
    return view('about');
});
