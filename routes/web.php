<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prova', [ProvaController::class, 'provaFunction']);
Route::post('/prova', [ProvaController::class, 'provaData']);
