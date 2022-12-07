<?php

namespace App\Modules\API\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Modules\API\Http\Resources\Battle\BattleResource;
use Auth;

class BattleIndexController extends Controller
{
    public function __invoke()
    {
        $game = Auth::user();

        return BattleResource::collection($game->battles);
    }
}
