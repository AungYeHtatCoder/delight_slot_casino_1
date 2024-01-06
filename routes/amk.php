<?php

use App\Http\Controllers\Admin\CashInRequestController;
use App\Http\Controllers\Admin\CashOutRequestController;
use App\Http\Controllers\Admin\Slot\GetGameTypeController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'checkBanned']], function () {

    // get game type and provider
    Route::get('game-type-lists',[GetGameTypeController::class,'index'])->name('game-type-lists');
    // game link tpye 
    //cash-request-lists
    Route::get('cash-in-request-list', [CashInRequestController::class, 'index'])->name('cash-in-request-list');
    Route::get('cash-out-request-list', [CashOutRequestController::class, 'index'])->name('cash-out-request-list');
});