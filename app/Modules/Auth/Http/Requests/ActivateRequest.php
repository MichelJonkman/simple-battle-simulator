<?php

namespace App\Modules\Auth\Http\Requests;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use RateLimiter;

class ActivateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'password' => 'required',
            'remember' => 'nullable'
        ];
    }

    public function authenticate(int $gameId): void
    {
        $this->ensureIsNotRateLimited($gameId);

        $params = [
            'id' => $gameId,
            'password' => $this->get('password'),
        ];

        if (!Auth::attempt($params, $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey($gameId));

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey($gameId));
    }

    public function ensureIsNotRateLimited(int $gameId): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey($gameId), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey($gameId));

        throw ValidationException::withMessages([
            'name' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(int $gameId): string
    {
        return $gameId.'|'.$this->ip();
    }
}