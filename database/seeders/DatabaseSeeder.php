<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $call = [
            \Database\Seeders\RolesAndPermissionsSeeder::class
        ];

        if (\App\Models\User::count() == 0) {
            $call[] = UserSeeder::class;
        }

        $this->call($call);
    }
}
