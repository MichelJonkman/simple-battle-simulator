<?php

namespace App\Modules\Auth\Casts;

use Hash;
use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

class PasswordCast implements CastsInboundAttributes
{
    public function set($model, $key, $value, $attributes)
    {
        if(Hash::info($value)['algo'] !== null) {
            return $value;
        }
        return Hash::make($value);
    }
}