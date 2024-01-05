<?php

use App\Http\Controllers\Admin\Agent\AgentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\GameController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\BannerTextController;
use App\Http\Controllers\Admin\Master\MasterController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\Slot\GetGameTypeController;
use App\Http\Controllers\Admin\Transfer\TransferLogController;




require __DIR__ . '/user.php';
require __DIR__ . '/amk.php';


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//auth routes
Route::get('/login', [LoginController::class, 'userLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/register', [LoginController::class, 'userRegister'])->name('register');

Route::group([
  'prefix' => 'admin', 'as' => 'admin.',
  'middleware' => ['auth', 'checkBanned']
], function () {
  // Permissions
  Route::delete('permissions/destroy', [PermissionController::class, 'massDestroy'])->name('permissions.massDestroy');
  Route::resource('permissions', PermissionController::class);
  // Roles
  Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
  Route::resource('roles', RolesController::class);
  // Users
  Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
  Route::resource('users', UsersController::class);
  Route::put('users/{id}/ban', [UsersController::class, 'banUser'])->name('users.ban');
  Route::resource('profiles', ProfileController::class);
  Route::put('/super-admin-update-balance/{id}', [
    ProfileController::class, 'AdminUpdateBalance'
  ])->name('admin-update-balance');

  // user profile route get method
  Route::put('/change-password', [ProfileController::class, 'newPassword'])->name('changePassword');
  // PhoneAddressChange route with auth id route with put method
  Route::put('/change-phone-address', [ProfileController::class, 'PhoneAddressChange'])->name('changePhoneAddress');
  Route::put('/change-kpay-no', [ProfileController::class, 'KpayNoChange'])->name('changeKpayNo');
  Route::put('/change-join-date', [ProfileController::class, 'JoinDate'])->name('addJoinDate');
  Route::resource('banners', BannerController::class);
  Route::resource('games', GameController::class);
  
  Route::resource('text', BannerTextController::class);
  Route::resource('/promotions', PromotionController::class);

  Route::resource('master', MasterController::class);
  Route::get('master/transfer/{id}', [MasterController::class, 'transfer'])->name('master.transfer');
  Route::post('master/transfer-store', [MasterController::class, 'transferStore'])->name('master.transferStore');
  Route::get('master/cash-out/{id}', [MasterController::class, 'cashOut'])->name('master.cashOut');
  Route::post('master/cash-out/update/{id}', [MasterController::class, 'cashOutUpdate'])->name('master.cashOutUpdate');
  Route::get('game-type-lists',[GetGameTypeController::class,'index'])->name('game-type-lists');


  
  // Route::get('agent-list', [MasterController::class, 'index'])->name('agent-list');
  // Route::get('agent-create', [MasterController::class, 'create'])->name('agent-create');
  // Route::post('agent-store', [MasterController::class, 'store'])->name('agent-store');
  // Route::get('agent-edit/{id}', [MasterController::class, 'edit'])->name('agent-edit');
  // Route::put('agent-update/{id}', [MasterController::class, 'update'])->name('agent-update');
  // Route::get('agent-show/{id}', [MasterController::class, 'show'])->name('agent-show');
  // Route::delete('agent-delete/{id}', [MasterController::class, 'destroy'])->name('agent-delete');
  // Route::get('agent-transfer/{id}', [MasterController::class, 'transfer'])->name('agent-transfer');
  // Route::post('agent-transfer-store', [MasterController::class, 'AgenttransferStore'])->name('agent-transfer-store');
  // Route::get('agent-cash-out/{id}', [MasterController::class, 'transferCashOut'])->name('agent-cash-out');
  // Route::put('agent-cash-out-store/{id}', [
  //   MasterController::class, 'AgentCashOutStore'
  // ])->name('agent-cash-out-store');
  // Route::resource('/promotions', PromotionController::class);
  // // agent user list route
  // Route::get('/agent-user-list', [AgentController::class, 'index'])->name('agent-user-list');
  // // agent user create route
  // Route::get('/agent-user-create', [AgentController::class, 'create'])->name('agent-user-create');
  // // agent user store route
  // Route::post('/agent-user-store', [AgentController::class, 'store'])->name('agent-user-store');
  // // agent user edit route
  // Route::get('/agent-user-edit/{id}', [AgentController::class, 'edit'])->name('agent-user-edit');
  // // agent user update route
  // Route::put('/agent-user-update/{id}', [AgentController::class, 'update'])->name('agent-user-update');
  // // agent user show route
  // Route::get('/agent-user-show/{id}', [AgentController::class, 'show'])->name('agent-user-show');
  // // agent user delete route
  // Route::delete('/agent-user-delete/{id}', [AgentController::class, 'destroy'])->name('agent-user-delete');
  // // agent user transfer route
  // Route::get('/agent-user-transfer/{id}', [AgentController::class, 'transfer'])->name('agent-user-transfer');
  // // store agent user transfer route
  // Route::post('/agent-user-transfer-store', [
  //   AgentController::class, 'AgentUsertransferStore'
  // ])->name('agent-user-transfer-store');
  // // agent user cash out route
  // Route::get('/agent-user-cash-out/{id}', [AgentController::class, 'transferCashOut'])->name('agent-user-cash-out');
  // // store agent user cash out route
  // Route::put('/agent-user-cash-out-store/{id}', [
  //   AgentController::class, 'AgentUserCashOutStore'
  // ])->name('agent-user-cash-out-store');
  // // get all transfer log route
  // Route::get('/get-all-admin-to-master-transfer-log', [
  //   TransferLogController::class, 'AdminToMasterTransferLog'
  // ])->name('get-all-admin-master-transfer-log');

  // // admin daily status transfer log route
  // Route::get('/get-all-admin-to-master-daily-status-transfer-log', [
  //   TransferLogController::class, 'AdminToMasterDailyStatusTransferLog'])->name('');
  // // admin monthly status transfer log route
  // Route::get('/get-all-admin-to-master-monthly-status-transfer-log', [
  //   TransferLogController::class, 'AdminToMasterMonthlyStatusTransferLog'])->name('');
  // // get all total daily master to agent transfer log route
  // Route::get('/get-all-master-to-agent-daily-status-transfer-log', [
  //   TransferLogController::class, 'MasterToAgentDailyStatusTransferLog'])->name('');
  // // get all total monthly master to agent transfer log route
  // Route::get('/get-all-master-to-agent-monthly-status-transfer-log', [
  //   TransferLogController::class, 'MasterToAgentMonthlyStatusTransferLog'])->name('');
  // // get all total daily agent to user transfer log route
  // Route::get('/get-all-agent-to-user-daily-status-transfer-log', [
  //   TransferLogController::class, 'AgentToUserDailyStatusTransferLog'])->name('');
  // // get all total monthly agent to user transfer log route
  // Route::get('/get-all-agent-to-user-monthly-status-transfer-log', [
  //   TransferLogController::class, 'AgentToUserMonthlyStatusTransferLog'])->name('');
  // // get all master to agent transfer log route
  // Route::get('/get-all-master-to-agent-transfer-log', [
  //   TransferLogController::class, 'MasterToAgentTransferLog'])->name('');
  // // get all agent to user transfer log route
  // Route::get('/get-all-agent-to-user-transfer-log', [
  //   TransferLogController::class, 'AgentToUserTransferLog'])->name('');
});
