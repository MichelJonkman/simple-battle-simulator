<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Http\Requests\NewRequest;
use App\Modules\Auth\Services\AuthService;

class NewController extends Controller
{
    public function __invoke(NewRequest $request, AuthService $authService)
    {
        $authService->createGame($request);

        return redirect()->route('auth.games')->with('alert-success', 'Successfully created new game');
    }
}