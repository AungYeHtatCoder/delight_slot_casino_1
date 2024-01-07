<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin permissions
        $admin_permissions = Permission::whereIn('title',[
            'admin_access',
            'role_index',
            'role_create',
            'role_store',
            'role_edit',
            'role_update',
            'role_delete',
            'permission_index',
            'permission_create',
            'permission_store',
            'permission_edit',
            'permission_update',
            'permission_delete',
            // 'master_index',
            // 'master_create',
            // 'master_store',
            // 'master_edit',
            // 'master_update',
            // 'master_delete',
            // 'transfer_log',
            // 'master_transfer',
            'game_type_access',
            'user_index',
            'user_create',
            'user_edit',
            'user_show',
            'user_update',
            'user_delete',
            'make_transfer',
            'transfer_log'
        ]);
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        // // Master gets specific permissions
        // $master_permissions = Permission::whereIn('title', [
        //     'master_access',
        //     'agent_index',
        //     'agent_create',
        //     'agent_store',
        //     'agent_edit',
        //     'agent_show',
        //     'agent_delete',
        //     'agent_update',
        //     'agent_transfer',
        //     'transfer_log'
        // ])->pluck('id');
        // Role::findOrFail(2)->permissions()->sync($master_permissions);

        // // Agent gets specific permissions
        // $agent_permissions = Permission::whereIn('title', [
        //     'user_index',
        //     'user_create',
        //     'user_edit',
        //     'user_show',
        //     'user_update',
        //     'user_delete',
        //     'agent_access',
        //     'make_transfer',
        //     'transfer_log'
        // ])->pluck('id');
        // Role::findOrFail(3)->permissions()->sync($agent_permissions);

        
    }
}
