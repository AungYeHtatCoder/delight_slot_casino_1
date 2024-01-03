<?php

namespace Database\Seeders;

use App\Models\Admin\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'id'         => 2,
                'title'      => 'Master',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'id'         => 3,
                'title'      => 'Agent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'         => 4,
                'title'      => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
        ];

        Role::insert($roles);
    }
}