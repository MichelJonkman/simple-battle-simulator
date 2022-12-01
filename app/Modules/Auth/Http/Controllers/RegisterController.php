<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Http\Requests\RegisterRequest;
use App\Modules\Auth\Services\AuthService;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request, AuthService $authService)
    {
        $authService->createGame($request);

        return redirect('games')->with('alert-success', 'Successfully created new game');
    }
}