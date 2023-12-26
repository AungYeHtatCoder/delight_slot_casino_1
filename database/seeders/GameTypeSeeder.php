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
                'code' => 'CB',
                'description' => 'CARD & BOARDGAME',
                'order' => 5,
                'icon' => 'cardlogo.png',
                'status' => 1
            ],

            [
                'code' => 'ES',
                'description' => 'E-GAMES',
                'order' => 9,
                'icon' => '',
                'status' => 0
            ],
            [
                'code' => 'FH',
                'description' => 'FISH HUNTER',
                'order' => 3,
                'icon' => 'fishlogo.png',
                'status' => 1
            ],
            [
                'code' => 'LC',
                'description' => 'LIVE-CASINO',
                'order' => 1,
                'icon' => 'casinologo.png',
                'status' => 1
            ],
            [
                'code' => 'LK',
                'description' => 'LOTTO',
                'order' => 6,
                'icon' => 'lottorylogo.png',
                'status' => 1
            ],
            [
                'code' => 'MG',
                'description' => 'MINI GAME',
                'order' => 8,
                'icon' => '',
                'status' => 0
            ],
            [
                'code' => 'PK',
                'description' => 'POKER',
                'order' => 10,
                'icon' => '',
                'status' => 0
            ],

            [
                'code' => 'OT',
                'description' => 'OTHERS',
                'order' => 7,
                'icon' => 'sportlogo.png',
                'status' => 1
            ],
            [
                'code' => 'SB',
                'description' => 'SPORTBOOK',
                'order' => 4,
                'icon' => 'sportlogo.png',
                'status' => 1
            ],

            [
                'code' => 'SL',
                'description' => 'SLOTS',
                'order' => 2,
                'icon' => 'sportlogo.png',
                'status' => 1
            ],

        ];

       GameType::insert($data);

    }
}
