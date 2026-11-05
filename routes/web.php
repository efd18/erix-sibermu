<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'auth.login')->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.authenticate');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::view('/dashboard', 'dashboard')
    ->middleware('auth')
    ->name('dashboard');
    