<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunAllTests extends Command
{
    protected $signature = 'test:all';
    protected $description = 'Run all PHPUnit tests';

    public function handle(): int
    {
        $this->info('Running all tests...');
        passthru('./vendor/bin/phpunit');
        return 0;
    }
}
