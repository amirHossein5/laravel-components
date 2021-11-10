<?php

namespace AmirHossein5\LaravelComponents;

use AmirHossein5\LaravelComponents\Components\Paginate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::component('paginate', Paginate::class);

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-components')
        ], 'laravel-components');

        $this->installCommands();
    }

    public function installCommands(): void
    {
        if ( $this->app->runningInConsole() ) {
            $this->commands([
                Console\InstallCommand::class
            ]);
        }
    }
}
