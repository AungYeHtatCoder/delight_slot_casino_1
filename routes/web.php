<?php

use App\Http\Controllers\Admin\Agent\AgentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\User\GameController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\BannerTextController;
use App\Http\Controllers\Admin\Master\MasterController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\GameType\GameTypeController;
use App\Http\Controllers\Admin\Transfer\TransferLogController;




require_once __DIR__ . '/user.php';
require_once __DIR__ . '/admin.php';


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//auth routes
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/register', [LoginController::class, 'userRegister'])->name('register');
