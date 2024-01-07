<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\ApiService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{   
    protected $apiService;
    protected $operatorCode;
    protected $secretKey;
    protected $backendPassword;
    protected $deposit;
    protected $withdraw;



    public function __construct(ApiService $apiService)
    {

        $this->apiService = $apiService;
        $this->operatorCode = config('common.operatorcode');
        $this->secretKey  = config('common.secret_key');
        $this->backendPassword  = config('common.backend_password');
        $this->deposit  = config('common.deposit');
        $this->withdraw = config('common.withdraw');
    }

    public function showLogin()
    {

        return view('auth.login');
    }

    public function login(Request $request)
    {
    
        $request->validate([
            'login' => 'required', // Input field named 'login' can hold either email or phone
            'password' => ['required', 'string', 'min:6'],
        ]);

        $loginField = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $credentials = [
            $loginField => $request->input('login'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
          
            // Authentication passed
            return redirect()->route('home')->with('success', 'Login Success!');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }


    public function register(UserRequest $request)
    {
        
        try {
            $inputs = $request->validated();
            
            $endpoint = '/createMember.aspx';
            $signatureString = strtolower($this->operatorCode) . $inputs['name'] . $this->secretKey;
            $signature = ApiHelper::generateSignature($signatureString);

            $param = [
                'operatorcode' => $this->operatorCode,
                'username' => $inputs['name'],
                'signature' => $signature,
            ];

            
                $data = $this->apiService->get($endpoint, $param);
               
                if ($data['errCode'] != 0) {
                   
                    return redirect()->back()->with('error', $data['errMsg']);
                }
                
                $userPrepare = array_merge(
                    $inputs,
                    ['password' => Hash::make($inputs['password']), 'agent_id' => 1]
                );
             
                $user = User::create($userPrepare);
                if($user)
                {
                    Auth::login($user);
                    return redirect()->route('home')->with('success', 'Register successfully');
                }else {
                        return redirect()->back()->with('error', 'Registration failed. Please try again.');
                    }
        

        } catch (Exception $e) {

            return back()->with('error', $e->getMessage());
        }

    }


    public function userRegister()
    {
        if(Auth::check()){
            return redirect()->back()->with('error', "Already Logged In.");
        }else{
           
            return view('auth.register');
        }
    }



}