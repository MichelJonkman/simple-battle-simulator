<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Battle extends Model
{
    protected $fillable = [
        'name',
        'battle_id'
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}