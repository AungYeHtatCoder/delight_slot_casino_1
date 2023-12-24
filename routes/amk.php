<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Slot\GetGameTypeController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'checkBanned']], function () {

    // get game type and provider
    Route::get('game-type-lists',[GetGameTypeController::class,'index'])->name('game-type-lists');

});