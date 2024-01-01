<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'first_name' => 'Super',
            'last_name' => 'User',
            'username' => 'superuser',
            'is_super' => true,
            'email' => env('APP_SUPER_USER_EMAIL', 'super@mail.com'),
        ]);

        \App\Models\User::factory(100)->create();
    }
}
