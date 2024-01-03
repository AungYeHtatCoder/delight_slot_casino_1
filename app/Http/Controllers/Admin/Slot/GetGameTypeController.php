<?php

namespace App\Http\Controllers\Admin\Slot;

use App\Models\GameType;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class GetGameTypeController extends Controller
{
    public function index()
{
    abort_if(Gate::denies('game_type_access'),
    Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
    // Retrieve all game types with their related providers
    $gameTypes = GameType::with('providers')->get();
    return view('admin.slot.game_type.index', compact('gameTypes'));
}

}