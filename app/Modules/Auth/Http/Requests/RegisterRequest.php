<?php

namespace App\Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'password' => 'required',
            'password_repeat' => 'required|same:password'
        ];
    }
}