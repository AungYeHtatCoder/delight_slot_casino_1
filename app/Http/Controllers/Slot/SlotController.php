<?php

namespace App\Http\Controllers\Slot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function index()
    {
        return view('slot.pages.index');
    }

    public function promotion()
    {
        return view('slot.pages.promotion');
    }

    public function agent()
    {
        return view('slot.pages.agent');
    }

    public function userInfo()
    {
        return view('slot.pages.user-info');
    }

    public function wallet()
    {
        return view('slot.pages.wallet');
    }
    public function betRecord()
    {
        return view('slot.pages.bet-record');
    }
    public function cashRecord()
    {
        return view('slot.pages.cash-record');
    }
    public function helpCenter()
    {
        return view('slot.pages.help-center');
    }
    public function feedback()
    {
        return view('slot.pages.feedback');
    }

    public function login()
    {
        return view('slot.pages.login');
    }

    public function register()
    {
        return view('slot.pages.register');
    }
}
