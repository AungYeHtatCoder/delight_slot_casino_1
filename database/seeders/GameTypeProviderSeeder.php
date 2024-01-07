<?php

namespace Database\Seeders;

use App\Models\Admin\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameTypeProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ASIAGAMING
        $provider1 = Provider::find(1);
        $agImages = ['sport_1.jpeg','slot_5.png'];
        $gameTypeId_1 = [3,4];
        foreach ($gameTypeId_1 as $index => $gameTypeId) {
            $gameTypeData_1[$gameTypeId] = ['image' => $agImages[$index]];
        }
        $provider1->gameTypes()->attach($gameTypeData_1);


        //BBIN
        $provider2 = Provider::find(2);
        $bbinImages = ['casino_1.png','slot_1.png'];
        $gameTypeId_2 = [2,4];
        $gameTypeData_2=[];
        foreach ($gameTypeId_2 as $index => $gameTypeId) {
            $gameTypeData_2[$gameTypeId] = ['image' => $bbinImages[$index]];
        }
        $provider2->gameTypes()->attach($gameTypeData_2);

    
        //GAMEPLAY
        $provider3 = Provider::find(3);
        $provider3->gameTypes()->attach(2 ,['image' => 'casino_2.png']);

        //JOKER
        $provider4 = Provider::find(4);
        $provider4->gameTypes()->attach(4,['image' => 'slot_3.png']);

        //JDB
        $provider5 = Provider::find(5);
        $provider5->gameTypes()->attach(4 ,['image' => 'slot_3.png']);

        //NEW LIVE22
        $provider6 = Provider::find(6);
        $provider6->gameTypes()->attach(4 ,['image' => 'slot_3.png']);


        //KING855
        $provider7 = Provider::find(7);
        $provider7->gameTypes()->attach(2,['image' => 'king885_casino.jpg']);

        //PGSOFT
        $provider8 = Provider::find(8);
        $provider8->gameTypes()->attach(4,['image' => 'slot_1.png']);


        //PRAGMATIC
        $provider9 = Provider::find(9);
        $prImages = ['casino_3.png','slot_3.png'];
        $gameTypeId_9 = [2,4];
        $gameTypeData_9=[];
        foreach ($gameTypeId_9 as $index => $gameTypeId) {
            $gameTypeData_9[$gameTypeId] = ['image' => $prImages[$index]];
        }
        $provider9->gameTypes()->attach($gameTypeData_9);


        //KING MAKER
        $provider10 = Provider::find(10);
        $provider10->gameTypes()->attach(4,['image' => 'slot_1.png']);


        //SBO
        $provider11 = Provider::find(11);
        $provider11->gameTypes()->attach(3,['image' => 'sport_2.jpeg']);


    }
}

