<?php

namespace AmirHossein5\LaravelComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->mergesConfig();
        $this->registerViewComponents();
        $this->registerRoutes();
        $this->registerBladeDirectives();

        if ($this->app->runningInConsole()) {
            $this->publishesViews();
        }

        $this->loadViewsFrom([
            __DIR__ . "/../resources/views/"
        ], 'Components');
    }

    private function mergesConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/components.php',
            'components-components'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/app.php',
            'components-app'
        );
    }

    private function registerViewComponents()
    {
        foreach ($this->getAllComponents() as $component) {
            Blade::componentNamespace(
                'AmirHossein5\\LaravelComponents\\Components\\' . ucwords($component['component']) . '\\Components',
                $component['component']
            );
        }
    }

    private function registerBladeDirectives()
    {
        Blade::directive('lComponentStyles', function ($componentName) {
            return "{!! '<link rel=stylesheet href=laravelComponents/css/'.$componentName.'.css >' !!}";
        });
        Blade::directive('lComponentScripts', function ($componentName) {
            return "{!! '<script src=laravelComponents/js/'.$componentName.'.js></script>' !!}";
        });
    }

    private function registerRoutes()
    {
        Route::get('/laravelComponents/css/{componentName}.css', [LaravelComponentsAssets::class, 'css']);
        Route::get('/laravelComponents/js/{componentName}.js', [LaravelComponentsAssets::class, 'js']);
    }

    private function publishesViews(): void
    {
        $allComponents = $this->getAllComponents();
        $publish_vendor_folder = config('components-app.publish_vendor_folder');

        foreach ($allComponents as $component) {
            $this->publishes([
                __DIR__ . "/../resources/views/{$component['component']}/{$component['theme']}" =>
                resource_path("views/vendor/{$publish_vendor_folder}/{$component['component']}/{$component['theme']}")
            ], "{$component['component']}-{$component['theme']}");
        }
    }

    private function getAllComponents(): array
    {
        $allComponents = [];
        $components = array_keys(config('components-components'));  // like pagination,...

        foreach ($components as $component) {
            $themes = config("components-components.{$component}"); // theme names.
            foreach ($themes as $theme) {
                $allComponents[] = ['component' => $component, 'theme' => $theme];
            }
        }

        return $allComponents;
    }
}
