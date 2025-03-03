<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvaController;

Route::get('/', function () {
    return view ('home', [
        'pageTitle' => 'HomePage',
        'metaTitle' => 'Pjr Store'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'pageTitle' => 'About Us',
        'metaTitle' => 'Pjr Store'
    ]);
});


Route::get('/prova', [ProvaController::class, 'provaFunction']);
Route::post('/prova', [ProvaController::class, 'provaData']);
