<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use App\Models\Admin\BannerText;
use App\Models\Admin\GameType;
use App\Models\Admin\PaymentList;
use App\Models\Provider;
use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $apiService;
    protected $operatorCode;
    protected $secreteKey;
    protected $backendPassword;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
        $this->operatorCode = config('common.operatorcode');
        $this->secreteKey  = config('common.secret_key');
        $this->backendPassword = config('commont.backend_password');
    }
    public function index()
    {
        $banners = Banner::latest()->take(3)->get();
        $bannerText = BannerText::latest()->first();

         $gameTypes = GameType::with('providers')->orderBy('order','asc')->where('status',1)->get();
        return view('user.pages.index',compact('gameTypes', 'banners', 'bannerText'));
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

        // $endpoint = 'getBalance.aspx';
        // $signaturString = ;
        $payments = PaymentList::all();
        return view('user.pages.wallet', compact('payments'));
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
