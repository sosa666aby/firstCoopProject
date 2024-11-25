<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;

// WELCOME PAGE
Route::get('/', [IndexController::class, 'index'])->name('index');

//REGISTER
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//LOGIN
//Route::get('/login', [LoginController::class, 'index'])->name('login');
//
//Route::post('/login', [LoginController::class, 'store'])->name('login.store');


