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
