<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/home', function () {
    return view('home');
});

