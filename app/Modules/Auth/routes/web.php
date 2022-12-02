<?php

use App\Modules\Auth\Http\Controllers\ActivateController;
use App\Modules\Auth\Http\Controllers\DeactivateController;
use App\Modules\Auth\Http\Controllers\GamesIndexController;
use App\Modules\Auth\Http\Controllers\ActivateFormController;
use App\Modules\Auth\Http\Controllers\NewController;
use App\Modules\Auth\Http\Controllers\NewFormController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/games', GamesIndexController::class)->name('auth.games');

    Route::get('/game/{game}', ActivateFormController::class)->name('auth.activate');
    Route::post('/game/{game}', ActivateController::class);

    Route::get('/register', NewFormController::class)->name('auth.new');
    Route::post('/register', NewController::class);
});

Route::get('/deactivate', DeactivateController::class)->name('auth.deactivate');