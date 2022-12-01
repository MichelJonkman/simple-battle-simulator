<?php

use App\Modules\Auth\Http\Controllers\LoginFormController;
use App\Modules\Auth\Http\Controllers\RegisterController;
use App\Modules\Auth\Http\Controllers\RegisterFormController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/games', LoginFormController::class)->name('games');
    Route::get('/login', LoginFormController::class)->name('login');
    Route::get('/register', RegisterFormController::class)->name('register');
    Route::post('/register', RegisterController::class);
});