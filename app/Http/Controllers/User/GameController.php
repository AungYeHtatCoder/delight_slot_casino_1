<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Services\ApiService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getGameList()
    {
        $endpoint = '/getGameList.aspx';
        $operatorCode = config('common.operatorcode');
        $providerCode = 'PG';
        $secretKey = config('common.secret_key');
        $signatureString = strtolower($operatorCode) . strtoupper($providerCode) . $secretKey;

        $signature = ApiHelper::generateSignature($signatureString);

        $param = [
            'operatorcode' => config('common.operatorcode'),
            'providercode' =>$providerCode,
            'signature' => $signature,
            'Lang' => 'en',
            'html5' => 0,
            'reformatJson' => 'no'
        ];

       // Replace with your API endpoint
        $data = $this->apiService->get($endpoint,$param);

         return response()->json($data);
        // $jsonData = json_decode($responseData, true);

        
    }

    public function launchGame()
    {

    }
}
