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
        $this->installServiceProviderAfter('RouterServiceProvider', 'ComponentsServiceProvider');

        $this->call('vendor:publish', ['--tag' => 'laravel-components', '--force']);
    }

    private function installServiceProviderAfter(string $after, string $name): void
    {
        if (!Str::contains($appConfig = file_get_contents(config_path('app.php')), "AmirHossein5\LaravelComponents\{$name}::class")) {
            file_put_contents(config_path('app.php'), str_replace(
                "App\Providers\{$after}::class",
                "App\Providers\{$after}::class".PHP_EOL.        "AmirHossein5\LaravelComponents\{$name}::class",
                $appConfig
            ));
        };
    }
}
