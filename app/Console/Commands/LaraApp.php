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
        $importantSeeders = [
            'RolesAndPermissionsSeeder'
        ];

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
            $importantSeeders = [
                ...$importantSeeders,
                'UserSeeder'
            ];
        }

        if ($this->option('fresh')) {
            $this->call('migrate:fresh');
            $this->info('Database cleared!');
        }

        // Execute seeders
        foreach ($importantSeeders as $seeder) {
            $this->call('db:seed', [
                '--class' => $seeder
            ]);
        }

        $this->info('Basic data generated!');

        $this->registerSuperUser($superUserData);
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
        $superRole = \Spatie\Permission\Models\Role::findByName(\App\Enums\RolesEnum::SUPER_USER->value);
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
}
