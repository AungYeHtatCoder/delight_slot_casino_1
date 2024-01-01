<?php

namespace Database\Seeders;
use App\Models\Admin\Role;
use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin gets all permissions
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        // Master gets specific permissions
        $master_permissions = Permission::whereIn('title', [
            'agent_management_access',
            'agent_create',
            'agent_edit',
            'agent_show',
            'agent_delete',
            'agent_access'
        ])->pluck('id');
        Role::findOrFail(2)->permissions()->sync($master_permissions);

        // Agent gets specific permissions
        $agent_permissions = Permission::whereIn('title', [
            'user_management_access',
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'user_access',
            'create_player',
            'make_transfer'
        ])->pluck('id');
        Role::findOrFail(3)->permissions()->sync($agent_permissions);

        
    }
}
