<?php

namespace App\Modules\API\Http\Requests;

use App\Models\Battle;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BattleCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', Rule::unique(Battle::class)]
        ];
    }
}