<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;

class DeactivateController extends Controller
{
    public function __invoke()
    {
        $game = Auth::user();

        Auth::logout();

        return redirect()->route('auth.games')->with('alert-success', "Successfully deactivated $game->name");
    }
}