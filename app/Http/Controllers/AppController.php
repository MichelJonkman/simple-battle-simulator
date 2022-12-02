<?php

namespace App\Http\Controllers;

use Auth;

class AppController extends Controller
{
    public function __invoke()
    {
        $game = Auth::user();

        return view('app', [
            'data' => [
                'game' => $game
            ]
        ]);
    }
}