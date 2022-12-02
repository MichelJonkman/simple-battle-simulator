<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Http\Requests\ActivateRequest;

class ActivateController extends Controller
{
    public function __invoke(ActivateRequest $request, int $game)
    {
        $request->authenticate($game);

        return redirect('/');
    }
}