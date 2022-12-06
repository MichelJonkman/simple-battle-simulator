<?php

namespace App\Modules\API\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Modules\API\Http\Requests\BattleCreateRequest;
use App\Modules\API\Services\BattleService;

class BattleCreateController extends Controller
{
    public function __invoke(BattleCreateRequest $request, BattleService $battleService)
    {
        return $battleService->createBattle($request);
    }
}