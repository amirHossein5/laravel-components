<?php

namespace AmirHossein5\LaravelComponents\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-components:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the laravelComponents provider and resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'laravel-components', '--force']);
    }
}
