<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StudyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'study-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is study command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo 'hello this is educational command.' . PHP_EOL;
        return 0;
    }
}
