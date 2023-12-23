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
        $provider1 = Provider::find(1); //ASIAGAMING
        $provider1->gameTypes()->sync([4, 5, 10,11]);

        $provider2 = Provider::find(2); //BBIN
        $provider2->gameTypes()->sync([1,4,5,6,11]);

        $provider3 = Provider::find(3); //JOKER
        $provider3->gameTypes()->sync([1,4,11]);

        $provider4 = Provider::find(4); //KING855
        $provider4->gameTypes()->sync(5);

        $provider5 = Provider::find(5); //PGSOFT
        $provider5->gameTypes()->sync(11);

        $provider6 = Provider::find(6); //PRAGMATIC
        $provider6->gameTypes()->sync([2,5,11]);

        $provider7 = Provider::find(7); //KING MAKER
        $provider7->gameTypes()->sync(11);

        $provider8 = Provider::find(8); //SBO
        $provider8->gameTypes()->sync([1,10]);

    }
}
