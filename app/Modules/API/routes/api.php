<?php

use App\Modules\API\Http\Controllers\Battle\BattleCreateController;
use App\Modules\API\Http\Controllers\Battle\BattleIndexController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/battle', BattleIndexController::class)->name('battle.index');
    Route::post('/battle/create', BattleCreateController::class)->name('battle.create');
});