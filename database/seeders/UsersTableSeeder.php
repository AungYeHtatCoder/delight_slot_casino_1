<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'           => 'delightamk',
                'phone'          => '09334567899',
                'password'       => Hash::make('password'),
                'admin_id'       => 1,
                'balance'        => 0,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
           

        ];

        User::insert($users);
    }
}