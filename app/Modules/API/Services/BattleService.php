<?php

namespace App\Modules\API\Services;

use App\Models\Battle;
use App\Modules\API\Http\Requests\BattleCreateRequest;
use Auth;

class BattleService
{

    public function createBattle(BattleCreateRequest $request): Battle
    {
        $game = Auth::user();

        return Battle::create([
            'game_id' => $game->id,
            ...$request->validated()
        ]);
    }

}