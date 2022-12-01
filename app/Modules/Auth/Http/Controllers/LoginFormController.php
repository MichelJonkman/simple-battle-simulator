<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginFormController extends Controller
{
    public function __invoke()
    {
        return view('modules.auth.login_form');
    }
}