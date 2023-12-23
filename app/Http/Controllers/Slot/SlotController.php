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

    public function login()
    {
        return view('slot.pages.login');
    }

    public function register()
    {
        return view('slot.pages.register');
    }
}
