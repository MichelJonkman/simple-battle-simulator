<?php

namespace App\Modules\API\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use Auth;

class BattleIndexController extends Controller
{
    public function __invoke()
    {
        $game = Auth::user();

        return $game->battles;
    }
}