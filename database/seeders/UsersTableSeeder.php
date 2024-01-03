<?php

namespace Database\Seeders;

use App\Models\User;
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
                'id'             => 1,
                'name'           => 'Admin',
                'phone'          => '09123456789',
                'password'       => Hash::make('password'),
                'agent_id'       => null,
                'balance'        => 100000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id'             => 2,
                'name'           => 'Master',
                'phone'          => '09112345678',
                'password'       => Hash::make('password'),
                'agent_id'       => 1,
                'balance'        => 0,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id'             => 3,
                'name'           => 'Agent',
                'phone'          => '09223456789',
                'password'       => Hash::make('password'),
                'agent_id'       => 2,
                'balance'        => 0,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id'             => 4,
                'name'           => 'User',
                'phone'          => '09334567899',
                'password'       => Hash::make('password'),
                'agent_id'       => 3,
                'balance'        => 0,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
           

        ];

        User::insert($users);
    }
}