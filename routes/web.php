<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/prova', [ProvaController::class, 'provaFunction']);
Route::post('/prova', [ProvaController::class, 'provaData']);
