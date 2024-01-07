<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CashOutRequest;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

            $this->call([
            // AdminTableSeeder::class,
            // PermissionsTableSeeder::class,
            // RolesTableSeeder::class,
            // PermissionRoleTableSeeder::class,
            // UsersTableSeeder::class,
            // RoleUserTableSeeder::class,
            // GameTypeSeeder::class,
            // ProviderSeeder::class,
            // GameTypeProviderSeeder::class,
            // L4GameListSeeder::class,
            // AGGameListSeeder::class,
            // GBGameListSeeder::class,
            // PGGameListSeeder::class,
            // PRGameListSeeder::class,
            // REGameListSeeder::class,
            // JKGameListSeeder::class,
            // S3GameListSeeder::class,
            // JDGameListSeeder::class

           
        ]);
        $data = CashOutRequest::create([
            'payment_method' => 'KPay',
            'amount' => '10000',
            'phone' => '097877666',
            'user_id' => 2
        ]);
    }
}
