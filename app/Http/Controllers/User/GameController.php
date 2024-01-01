<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin\GameList;
use App\Models\GameType;
use App\Models\Provider;
use App\Services\ApiService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
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

    public function gameListAPI()
    {

        $endpoint = '/getGameList.aspx';
        $providerCode = 'GB';
        $signatureString = strtolower($this->operatorCode) . strtoupper($providerCode) . $this->secretKey;
        $signature = ApiHelper::generateSignature($signatureString);

        $param = [
            'operatorcode' => config('common.operatorcode'),
            'providercode' =>$providerCode,
            'signature' => $signature,
            'Lang' => 'en',
            'html5' => 1 ,
            'reformatJson' => 'yes'
        ];

       // Replace with your API endpoint
        $data = $this->apiService->get($endpoint,$param);
        // dd($data['gamelist']);

        $games = json_decode($data['gamelist'], true);
        return $games;

        // $jsonData = json_decode($responseData, true);


    }

    public function getGameList($provider_id, $game_type_id)
    {
        $gameLists = GameList::where('provider_id',$provider_id)->where('game_type_id',$game_type_id)->get();

        return view('slot.pages.game-details',compact('gameLists'));
    }
    public function launchGame($id)
    {
        $game = GameList::where('id',$id)->first();
        $endpoint = '/launchGames.aspx';
        $password = 'pass1234';
        $providerCode = 'GB';
        $userName = 'sophia';
        $type = $game->gameType->code ;
        // $gameId = $game->game_id;
        $signatureString = $this->operatorCode.$password.$providerCode.$type.$userName.$this->secretKey;
        $signature = ApiHelper::generateSignature($signatureString);


        $parameters = [
            'operatorcode' => config('common.operatorcode'),
            'providercode' => 'GB',
            'username' => $userName,
            'password' => $password,
            'type' => 'SL',
            'gameid' => 0,
            'lang' => 'en',
            'html5' => 0,
            'signature' => $signature,
            'blimit' => 0,
        ];

        $response = $this->apiService->get($endpoint, $parameters);

        $data = $response['gameUrl'];
        return redirect($data);


    }
}
