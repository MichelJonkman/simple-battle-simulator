<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;

class GamesIndexController extends Controller
{
    public function __invoke()
    {
        return view('modules.auth.games_index', [
            'games' => Game::all()
        ]);
    }
}