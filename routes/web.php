<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
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

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/akreditasi', function () {
    return view('akreditasi');
});

Route::get('/status', function () {
    return view('status');
});
