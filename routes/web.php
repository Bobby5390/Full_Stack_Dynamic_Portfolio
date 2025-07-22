<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/work', function () {
    return view('work');
});

