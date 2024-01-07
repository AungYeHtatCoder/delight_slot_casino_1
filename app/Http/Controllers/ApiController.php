<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper;
use App\Models\User;
use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController

{
    protected $apiService;
    protected $operatorCode;

    protected $secretKey;



    public function __construct(ApiService $apiService)
    {

        $this->apiService = $apiService;
        $this->operatorCode = config('common.operatorcode');
        $this->secretKey  = config('common.secret_key');
    }

    public function getAdminBalance()
    {
            $endPoint = '/checkAgentCredit.aspx';
            $signatureString = $this->operatorCode . $this->secretKey;
            $signature = ApiHelper::generateSignature($signatureString);
        
            $param =[
                'operatorcode' => $this->operatorCode,
                'signature' => $signature
            ];

        return  $this->apiService->get($endPoint,$param);
          
    }

   
   


}
