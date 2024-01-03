<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper;
use App\Models\User;
use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $apiService;

    protected $operatorCode;

    protected $secretKey;

    public function __construct(ApiService $apiService)
    {
        $this->middleware('auth');
        $this->apiService = $apiService;
        $this->operatorCode = config('common.operatorcode');
        $this->secretKey  = config('common.secret_key');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->hasRole('Admin')) {

            $endPoint = '/checkAgentCredit.aspx';
            $signatureString = $this->operatorCode . $this->secretKey;
            $signature = ApiHelper::generateSignature($signatureString);
        
            $param =[
                'operatorcode' => $this->operatorCode,
                'signature' => $signature
            ];
            $response = $this->apiService->get($endPoint,$param);
           
            return view('admin.profile.admin_profile',compact('response'));
        } elseif (auth()->user()->hasRole('Master')) {
        $agents = User::where('agent_id', Auth::user()->id)->count();

            return view('admin.master.master_dashboard', compact('agents'));
        } elseif (auth()->user()->hasRole('Agent')) {
        $userId = auth()->id(); // ID of the master user
        // Retrieve agents created by this master user
        $agentIds = User::where('agent_id', $userId)->pluck('id');
            return view('admin.agent.agent_dashboard', compact('agentIds'));
        } else {
            return view('welcome');
        }
    }
}
