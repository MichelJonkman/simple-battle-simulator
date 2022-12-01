<?php

namespace App\Modules\Auth\Services;


use App\Models\Game;
use App\Modules\Auth\Http\Requests\RegisterRequest;

class AuthService
{
    public function createGame(RegisterRequest $request)
    {
        return Game::create($request->all());
    }
}