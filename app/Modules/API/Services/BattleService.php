<?php

namespace App\Modules\API\Services;

use App\Models\Battle;
use App\Modules\API\Http\Requests\BattleCreateRequest;

class BattleService
{

    public function createBattle(BattleCreateRequest $request): Battle
    {
        $game = \Auth::user();

        return Battle::create([
            'battle_id' => $game->id,
            ...$request->validated()
        ]);
    }

}