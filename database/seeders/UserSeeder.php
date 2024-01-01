<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super = \App\Models\User::factory()->create([
            'first_name' => 'Super',
            'last_name' => 'User',
            'username' => 'superuser',
            'email' => env('APP_SUPER_USER_EMAIL', 'super@mail.com'),
        ]);

        $super->assignRole(RolesEnum::SUPER_USER);

        $admin = \App\Models\User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'username' => 'adminuser',
            'email' => 'admin@mail.com',
        ]);

        $admin->assignRole(RolesEnum::ADMIN_USER);

        \App\Models\User::factory(100)->create();
    }
}
