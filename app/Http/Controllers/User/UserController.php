<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GameType;
use App\Models\Provider;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

         $gameTypes = GameType::with('providers')->orderBy('order','asc')->where('status',1)->get();
        return view('user.pages.index',compact('gameTypes'));
    }

    public function promotion()
    {
        return view('user.pages.promotion');
    }

    public function agent()
    {
        return view('user.pages.agent');
    }

    public function userInfo()
    {
        return view('user.pages.user-info');
    }

    public function wallet()
    {
        return view('user.pages.wallet');
    }
    public function betRecord()
    {
        return view('user.pages.bet-record');
    }
    public function cashRecord()
    {
        return view('user.pages.cash-record');
    }
    public function helpCenter()
    {
        return view('user.pages.help-center');
    }
    public function feedback()
    {
        return view('user.pages.feedback');
    }

    public function login()
    {
        return view('user.pages.login');
    }

    public function register()
    {
        return view('user.pages.register');
    }

    public function asiagaming()
    {
        return view('user.pages.game-details');
    }
}