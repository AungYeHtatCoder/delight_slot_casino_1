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
                'name'           => 'Admin',
                'phone'          => '09123456789',
                'password'       => Hash::make('password'),
                'balance'        => 0,
                'agent_id'      => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'name'           => 'delightamk',
                'phone'          => '09334567899',
                'password'       => Hash::make('password'),
                'agent_id'      => 1,
                'balance'        => 0,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
            ];

        User::insert($users);
    }
}