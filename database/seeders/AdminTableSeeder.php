<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            [
            'name'           => 'Admin',
            'phone'          => '09123456789',
            'password'       => Hash::make('password'),
            'agent_id'       => null,
            'balance'        => 0,
            'created_at'     => now(),
            'updated_at'     => now(),
            ]
            ];
       
        Admin::insert($admin);
 
    }
}
