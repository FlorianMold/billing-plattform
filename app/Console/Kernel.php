<?php

namespace Rechnungsplattform\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Rechnungsplattform\Company;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
        Commands\SynchronizeDatabase::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        //$schedule->command('Database:synchronize')->daily();
        //$schedule->command('Database:synchronize')->everyMinute();

        //zum sichern der Datenbank
        $schedule->command('iseed bills,billtypes,companies,currencies,emails,failed_jobs,jobs,migrations,password_criterias,suppliers,users --force')->daily();

        //* * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1
        // mit diesem befehl in linux dann einen befehl cronjob erstellen, der jede Minute ausgeführt wird
        //      das restliche macht dann laravel selber
    }
}
