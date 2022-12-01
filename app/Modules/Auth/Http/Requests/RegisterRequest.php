<?php

namespace App\Modules\Auth\Http\Requests;

use App\Models\Game;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', Rule::unique(Game::class)],
            'password' => 'required',
            'password_repeat' => [
                'required',
                'same:password'
            ]
        ];
    }
}