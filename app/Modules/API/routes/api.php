<?php

use App\Modules\API\Http\Controllers\Battle\BattleCreateController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/battle/create', BattleCreateController::class)->name('battle.create');
});