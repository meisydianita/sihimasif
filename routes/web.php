<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CekLevel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/postlogout', [LoginController::class, 'postlogout'])->name('logout');

Route::middleware(['auth:user', 'ceklevel:Sekretaris Umum'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/surat-masuk', [HomeController::class, 'suratmasuk'])->name('surat-masuk');    
    Route::get('/surat-keluar', [HomeController::class, 'suratkeluar'])->name('surat-keluar');
    });

Route::middleware(['auth:user', 'ceklevel:Bendahara Umum'])->group(function () {
    Route::get('/home-bendum', [HomeController::class, 'bendum'])->name('home-bendum');

    });

Route::middleware(['auth:anggota', 'ceklevel:Anggota'])->group(function () {
    Route::get('/home-anggota', [HomeController::class, 'anggota'])->name('home-anggota');

    });