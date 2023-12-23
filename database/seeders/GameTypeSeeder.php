<?php

namespace Database\Seeders;

use App\Models\GameType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => 'APP',
                'description' => 'Mobile Application'
            ],
            [
                'code' => 'CB',
                'description' => 'CARD & BOARDGAME'
            ],

            [
                'code' => 'ES',
                'description' => 'E-GAMES'
            ],
            [
                'code' => 'FH',
                'description' => 'FISH HUNTER'
            ],
            [
                'code' => 'LC',
                'description' => 'LIVE-CASINO'
            ],
            [
                'code' => 'LK',
                'description' => 'LOTTO'
            ],
            [
                'code' => 'MG',
                'description' => 'MINI GAME'
            ],
            [
                'code' => 'PK',
                'description' => 'POKER'
            ],

            [
                'code' => 'OT',
                'description' => 'OTHERS'
            ],
            [
                'code' => 'SB',
                'description' => 'SPORTBOOK'
            ],

            [
                'code' => 'SL',
                'description' => 'SLOTS'
            ],

        ];

       GameType::insert($data);

    }
}
