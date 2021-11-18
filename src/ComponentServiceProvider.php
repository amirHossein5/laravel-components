<?php

namespace AmirHossein5\LaravelComponents;

use AmirHossein5\LaravelComponents\Components\Pagination\Paginate;
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

        $this->mergeConfigFrom(
            __DIR__ . '/../config/components.php',
            'components'
        );

        $this->loadViewsFrom([
            __DIR__ . "/../resources/views/"
        ], 'Components');

        if ($this->app->runningInConsole()) {
            $this->publishesViews();
        }
    }

    private function publishesViews(): void
    {
        $allComponents = $this->getAllComponents();

        foreach ($allComponents as $component) {
            $this->publishes([
                __DIR__ . "/../resources/views/{$component['component']}/{$component['theme']}" =>
                resource_path("views/vendor/laravel-components/{$component['component']}/{$component['theme']}")
            ], "{$component['component']}-{$component['theme']}");
        }
    }

    private function getAllComponents(): array
    {
        $allComponents = [];
        $components = array_keys(config('components'));  // like pagination,...

        foreach ($components as $component) {
            $themes =  config("components.{$component}"); // theme names.

            foreach ($themes as $theme) {
                $allComponents[] = ['component' => $component, 'theme' => $theme];
            }
        }

        return $allComponents;
    }
}
