<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Models\Students;

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


Route::get('/day6', [StudentsController::class, 'index']);
Route::get('/day6/create', [StudentsController::class, 'create']);
Route::post('/day6', [StudentsController::class, 'store']);