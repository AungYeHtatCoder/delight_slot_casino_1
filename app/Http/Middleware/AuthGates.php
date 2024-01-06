<?php

namespace App\Http\Middleware;

use App\Models\Admin\Admin;
use Closure;
use App\Models\Admin\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        

        if (Auth::guard('admin'))
        {
            $roles            = Role::with('permissions')->get();
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }

            foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function (Admin $admin) use ($roles) {
                    return count(array_intersect($admin->roles->pluck('id')->toArray(), $roles)) > 0;
                });
            }
        }

        return $next($request);
        
    }
}