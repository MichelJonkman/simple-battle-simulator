<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class NewFormController extends Controller
{
    public function __invoke()
    {
        return view('modules.auth.new_form');
    }
}