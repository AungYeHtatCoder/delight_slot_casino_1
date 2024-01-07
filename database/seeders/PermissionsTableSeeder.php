<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'title'      => 'permission_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'permission_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'permission_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'permission_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'permission_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'role_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'role_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'role_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'role_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'role_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'user_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'user_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'user_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'user_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'user_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'game_type_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_transfer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'master_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_store',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_update',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'agent_transfer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'admin_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'make_transfer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'transfer_log',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
        ];

        Permission::insert($permissions);
    }
}
