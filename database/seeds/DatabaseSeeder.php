<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Console\Scheduling\Schedule;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserAddSeeder');
        $this->command->info('User app seeds finished.'); // show information in the command line after everything is run
        Model::reguard();
    }
}

class UserAddSeeder extends Seeder
{
    public function run()
    {
        // clear our database -----------------------------------------
        DB::table('bills')->delete();
        DB::table('companies')->delete();
        DB::table('currencies')->delete();
        DB::table('password_criterias')->delete();
        DB::table('suppliers')->delete();
        DB::table('users')->delete();
        DB::table('emails')->delete();
        DB::table('billtypes')->delete();
        DB::table('jobs')->delete();
        DB::table('failed_jobs')->delete();

        // USER erstellen ----------------------------------------------
        \Rechnungsplattform\User::create(array(
            'username' => 'Christopher Ferkl',
            'password' => 'Hugo123!',
            'email' => 'christopher.ferkl@elk.at',
            'has_changed' => '1',
            'rights' => 'admin',
            'locked' => '0',
        ));
        $this->command->info('The Users are alive!');

        // Passwortkriterien erstellen ----------------------------------------------
        \Rechnungsplattform\Password_criteria::create(array(
            'appliesTo' => 'admin',
            'large_lower_case' => '1',
            'special_chars' => '1',
            'number' => '1',
            'min_chars' => 5,
            'interval' => 4,
        ));
        \Rechnungsplattform\Password_criteria::create(array(
            'appliesTo' => 'accounting',
            'large_lower_case' => '1',
            'special_chars' => '1',
            'number' => '1',
            'min_chars' => 6,
            'interval' => 4,
        ));
        \Rechnungsplattform\Password_criteria::create(array(
            'appliesTo' => 'supplier',
            'large_lower_case' => '1',
            'special_chars' => '1',
            'number' => '1',
            'min_chars' => 1,
            'interval' => 4,
        ));
        $this->command->info('PasswordCriteria can be used.');
    }
}