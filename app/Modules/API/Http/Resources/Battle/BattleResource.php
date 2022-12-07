<?php

namespace App\Modules\API\Http\Resources\Battle;

use App\Models\Battle;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Battle */
class BattleResource extends JsonResource
{
    /**
     * @param Request $request
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'game_id' => $this->game_id,
        ];
    }
}
