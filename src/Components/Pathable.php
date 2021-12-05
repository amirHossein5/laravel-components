<?php

namespace AmirHossein5\LaravelComponents\Components;

use Illuminate\Support\Facades\App;

trait Pathable
{
    protected function assets_path($path): string
    {
        $package_name = config('components-app.package_name');
        $author_name = config('components-app.author_name');
        $assets_path = config('components-app.assets_path');

        return !App::environment('testing')
            ? base_path("vendor/{$author_name}/{$package_name}/{$assets_path}/{$path}")
            : "{$assets_path}/{$path}";
    }
}
