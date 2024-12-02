<?php

use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\TestApiController;

// WELCOME PAGE
Route::get('/', [IndexController::class, 'index'])->name('index');

//REGISTER
Route::group(['middleware'=>[]],function(){
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
}
);


//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

//API
Route::get('/api/posts', [TestApiController::class, 'index']);



