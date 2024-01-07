<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper;
use App\Models\Admin\Admin;
use App\Models\User;
use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class HomeController extends ApiController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $apiService;

    protected $operatorCode;

    protected $secretKey;

    protected $apiDashbaord;

    public function __construct(ApiService $apiService)
    {
        $this->middleware('auth');
        $this->apiService = $apiService;
        $this->operatorCode = config('common.operatorcode');
        $this->secretKey  = config('common.secret_key');
        $this->apiDashbaord = config('common.api_dashboard');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $admin = Auth::user();
            
            if($admin->hasRole('Admin'))
            {
                $response = $this->getAdminBalance();
                $userCount = User::wherenull('agent_id')->count();
               
                return view('admin.dashboard',compact('response','userCount'));
            }else{

                return redirect('/');
            }
        
    }

    public function apiDashboard()
    {
        return view('admin.api_dashboard')->with(['apiDashboard' => $this->apiDashbaord]);
    }
    public function profile()
    {
        return view('admin.profile.admin_profile');
    }

} 