<?php

use App\Http\Controllers\User\GameController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {

    Route::get('gamelist',[GameController::class,'getGameList']);

});
