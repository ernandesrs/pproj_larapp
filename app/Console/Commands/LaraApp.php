<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaraApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start {--fresh : Execute migrate:fresh } {--super : Require super user email and password }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $rolePermissionSeeder = [
            'RolesAndPermissionsSeeder'
        ];

        $othersImportantSeeders = [];

        if ($this->option('super')) {
            $superUserData = $this->getValidSuperAdminData();
        } else {
            $superUserData = [
                'email' => 'super@mail.com',
                'password' => 'password'
            ];
        }

        $seedUsers = $this->choice('Seed users?', ['no', 'yes']);

        if ($seedUsers == 'yes') {
            $othersImportantSeeders = [
                ...$othersImportantSeeders,
                'UserSeeder'
            ];
        }

        if ($this->option('fresh')) {
            $this->call('migrate:fresh');
            $this->info('Database cleared!');
        }

        // Execute role and permission seeder
        foreach ($rolePermissionSeeder as $rpSeeder) {
            $this->call('db:seed', [
                '--class' => $rpSeeder
            ]);
        }
        $this->info('Roles registered!');

        $this->registerSuperUser($superUserData);
        $this->registerAdminUser();

        sleep(1);

        // Execute seeders
        foreach ($othersImportantSeeders as $seeder) {
            $this->call('db:seed', [
                '--class' => $seeder
            ]);
        }

        $this->info('Others basic data generated!');
    }

    /**
     * Get a valid super admin user data
     *
     * @return array
     */
    private function getValidSuperAdminData()
    {
        do {
            $this->line('');
            $this->line('');
            $this->line("Let's register a super admin user:");

            $super['email'] = $this->ask('Enter a valid email:');
            $super['password'] = $this->ask('Enter a password');
            $super['password_confirmation'] = $this->ask('Confirm the password');

            if ($this->validateSuperUserData($super)->fails()) {
                $this->error('Enter a valid email and password!');
            }
        } while ($this->validateSuperUserData($super)->fails());

        return $super;
    }

    /**
     * Validate super user data
     *
     * @param array $data
     * @return \Illuminate\Validation\Validator
     */
    private function validateSuperUserData(array $data)
    {
        return \Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
    }

    /**
     * Register super user
     *
     * @param array $data
     * @return void
     */
    private function registerSuperUser(array $data)
    {
        $superRole = \App\Models\Role::findByName(\App\Enums\RolesEnum::SUPER_USER->value);
        $superUser = \App\Services\UserService::create([
            'first_name' => 'Super',
            'last_name' => 'User',
            'username' => 'superuser',
            'gender' => 'n',
            ...$data
        ]);

        $superUser->assignRole($superRole);

        $this->info('Super user created!');
    }

    /**
     * Register admin user
     *
     * @return void
     */
    private function registerAdminUser()
    {
        $adminRole = \App\Models\Role::findByName(\App\Enums\RolesEnum::ADMIN_USER->value);
        $adminUser = \App\Services\UserService::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'username' => 'Adminuser',
            'gender' => 'n',
            'password' => 'password',
            'email' => 'admin@mail.com'
        ]);

        $adminUser->assignRole($adminRole);

        $this->info('Admin user created!');
    }
}
