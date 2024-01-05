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
use Illuminate\Support\Facades\Log;

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
        $providerCode = 'G8';
        $signatureString = strtolower($this->operatorCode) . strtoupper($providerCode) . $this->secretKey;
        $signature = ApiHelper::generateSignature($signatureString);

        $param = [
            'operatorcode' => config('common.operatorcode'),
            'providercode' => $providerCode,
            'signature' => $signature,
            'Lang' => 'en',
            'html5' => 1,
            'reformatJson' => 'yes'
        ];

        // Replace with your API endpoint
        $data = $this->apiService->get($endpoint, $param);

        $games = json_decode($data['gamelist'], true);

        return $games;
    }

    public function getGameList($provider_id, $game_type_id)
    {
        $gameLists = GameList::where('provider_id', $provider_id)->where('game_type_id', $game_type_id)->get();

        return view('user.pages.game-details', compact('gameLists'));
    }
    public function launchGame($id)
    {
        $game = GameList::where('id', $id)->first();
        $endpoint = '/launchGames.aspx';
        $password = 'pass1234';
        $providerCode = $game->provider->p_code;
        $userName = 'sophia';
        $type = $game->gameType->code;
        $gameId = $game->game_id;

        $signature = $this->getSignature(
            $this->operatorCode,
            $password,
            $providerCode,
            $type,
            $userName,
            $this->secretKey
        );
        $response = $this->apiService->get(
            $endpoint,
            $this->getParam($password, $userName, $signature, $providerCode, $type, $gameId)
        );

        $data = $response['gameUrl'];
       
        return redirect($data);
    }
    public function directGame(Provider $provider_id, GameType $game_type_id)
    {

        $endpoint = '/launchGames.aspx';
        $password = 'pass1234';
        $userName = 'sophia';
        $providerCode = $provider_id->p_code;
        $type  = $game_type_id->code;

        $signature = $this->getSignature(
            $this->operatorCode,
            $password,
            $providerCode,
            $type,
            $userName,
            $this->secretKey
        );

        $response = $this->apiService->get(
            $endpoint,
            $this->getParam($password, $userName, $signature, $providerCode, $type)
        );

        $data = $response['gameUrl'];

        return redirect($data);
    }
    private function getSignature($operatorCode, $password, $providerCode, $type, $userName, $secretKey)
    {
        $signatureString = $operatorCode . $password . $providerCode . $type . $userName . $secretKey;

        return ApiHelper::generateSignature($signatureString);
    }

    private function getParam($password, $userName, $signature, $providerCode, $type, $isGameId = 0)
    {
      
        return  [
            'operatorcode' => config('common.operatorcode'),
            'providercode' => $providerCode,
            'username' => $userName,
            'password' => $password,
            'type' => $type,
            'gameid' => $isGameId,
            'lang' => 'en',
            'html5' => 0,
            'signature' => $signature,
            'blimit' => 0,
        ];
    }
}
