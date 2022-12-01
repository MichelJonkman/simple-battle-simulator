<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class RegisterFormController extends Controller
{
    public function __invoke()
    {
        return view('modules.auth.register_form');
    }
}