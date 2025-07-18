<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('day5/', function () {
    return view('day5/index');
});

Route::get('/greet', function () {
    $name = 'Dumakude';
    return view('day5/greet', ['name' => $name, 'course' => 'Laravel']);
});
