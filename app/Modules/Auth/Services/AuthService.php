<?php

namespace App\Modules\Auth\Services;


use App\Models\Game;
use App\Modules\Auth\Http\Requests\NewRequest;

class AuthService
{
    public function createGame(NewRequest $request)
    {
        return Game::create($request->validated());
    }
}