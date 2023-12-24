<?php

namespace Database\Seeders;

use App\Models\GameType;
use App\Models\Provider;
use App\Models\ProviderCode;
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
        $AgImages = ['fishgame1.png','live_casino_1.jpeg','sport_1.png','slot_5.png'];
        $gameTypeId_1 = [3, 4, 9, 10];
        foreach ($gameTypeId_1 as $index => $gameTypeId) {
            $gameTypeData_1[$gameTypeId] = ['image' => $AgImages[$index]];
        }
        $provider1->gameTypes()->attach($gameTypeData_1);


        //BBIN
        $provider2 = Provider::find(2);
        $bbinImages = ['fishgame2.jpg','live_casino_2.jpeg','lotto1.png','slot_1.png'];
        $gameTypeId_2 = [3,4,5,10];
        $gameTypeData_2=[];
        foreach ($gameTypeId_2 as $index => $gameTypeId) {
            $gameTypeData_2[$gameTypeId] = ['image' => $bbinImages[$index]];
        }
        $provider2->gameTypes()->attach($gameTypeData_2);


        //JOKER
        $provider3 = Provider::find(3);
        $jokerImages = ['fishgame3.png','slot_2.png'];
        $gameTypeId_3 = [3,10];
        $gameTypeData_3=[];
        foreach ($gameTypeId_3 as $index => $gameTypeId) {
            $gameTypeData_3[$gameTypeId] = ['image' => $jokerImages[$index]];
        }
        $provider3->gameTypes()->attach($gameTypeData_3);

        //KING855
        $provider4 = Provider::find(4);
        $provider4->gameTypes()->attach(4,['image' => 'king855_1.jpeg']);

        $provider5 = Provider::find(5); //PGSOFT
        $provider5->gameTypes()->attach(10 ,['image' => 'slot_3.png']);

        //PRAGMATIC
        $provider6 = Provider::find(6);
        $pragmaticImages = ['card_1.png','live_casino_2.jpeg','slot_4.png'];
        $gameTypeId_6 = [1,4,10];
        $gameTypeData_6=[];
        foreach ($gameTypeId_6 as $index => $gameTypeId) {
            $gameTypeData_6[$gameTypeId] = ['image' => $pragmaticImages[$index]];
        }
        $provider6->gameTypes()->attach($gameTypeData_6);


        //KING MAKER
        $provider7 = Provider::find(7);
        $provider7->gameTypes()->attach(10,['image' => 'slot_5.png']);


        //SBO
        $provider8 = Provider::find(8);
        $S3Images = ['other_1.png','sport_2.png'];
        $gameTypeId_8 = [8,9];
        $gameTypeData_8=[];
        foreach ($gameTypeId_8 as $index => $gameTypeId) {
            $gameTypeData_8[$gameTypeId] = ['image' => $S3Images[$index]];
        }

        $provider8->gameTypes()->attach($gameTypeData_8);


    }
}
