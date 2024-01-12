<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * 
         * Reset cached roles and permissions
         * 
         */
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /**
         * 
         * Register all permissions defined
         * in \App\Enums\Admins
         * 
         */
        foreach ([...\App\Enums\Admin\UserPermissionsEnum::cases(), ...\App\Enums\Admin\RolePermissionsEnum::cases()] as $permission) {
            Permission::create(['name' => $permission->value]);
        }

        /**
         * 
         * Register all roles defined
         * in \App\Enums\RolesEnum
         * 
         */
        foreach (RolesEnum::cases() as $role) {
            $role = Role::create(['name' => $role->value]);
            $role->givePermissionTo(\App\Enums\Admin\UserPermissionsEnum::ADMIN_ACCESS->value);
        }
    }
}
