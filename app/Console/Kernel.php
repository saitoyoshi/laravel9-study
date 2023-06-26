<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        // 毎分
        $schedule->command('study-command')->everyMinute()->emailOutputTo('info@example .com');
        $schedule->command('study-command')->hourly();
        $schedule->command('study-command')->hourlyAt(8);
        $schedule->command('study-command')->daily();
        $schedule->command('study-command')->dailyAt('13:00');
        $schedule->command('study-command')->cron('15 3  * * *');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
