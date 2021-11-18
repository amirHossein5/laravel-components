<?php

namespace AmirHossein5\LaravelComponents\Components;

trait Pathable
{
    protected function assets_path($path): string
    {
        $package_name = config('lComponents-app.package_name');
        $author_name = config('lComponents-app.author_name');
        $assets_path = config('lComponents-app.assets_path');

        return base_path("vendor/{$author_name}/{$package_name}/{$assets_path}/{$path}");
    }
}
