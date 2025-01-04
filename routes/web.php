<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog2', function () {
    return view('blog2');
});

Route::get('/blog3', function () {
    return view('blog3');
});
