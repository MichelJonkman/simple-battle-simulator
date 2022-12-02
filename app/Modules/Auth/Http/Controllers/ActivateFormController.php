<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;

class ActivateFormController extends Controller
{
    public function __invoke(Game $game)
    {
        return view('modules.auth.activate_form', [
            'game' => $game
        ]);
    }
}