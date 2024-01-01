<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
         * in \App\Enums\PermissionsEnum
         * 
         */
        foreach (PermissionsEnum::cases() as $permission) {
            Permission::create(['name' => $permission->value]);
        }

        /**
         * 
         * Register all roles defined
         * in \App\Enums\RolesEnum
         * 
         */
        foreach (RolesEnum::cases() as $role) {
            Role::create(['name' => $role->value]);
        }
    }
}
