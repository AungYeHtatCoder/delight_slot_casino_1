<?php

use App\Http\Controllers\User\GameController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {

    Route::get('gamelistapi',[GameController::class,'gameListAPI']);
    Route::get('/gamelist/{provider_id}/game_type/{game_type_id}', [GameController::class, 'getGameList'])->name('user.gamelist');
    Route::get('/launchGame/{id}', [GameController::class, 'launchGame'])->name('user.launchGame');

});
