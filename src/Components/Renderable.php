<?php

namespace AmirHossein5\LaravelComponents\Components;

use Illuminate\View\View;

trait Renderable
{
    protected function view(string $path): View
    {
        $path = $this->getViewPath($path);

        return view($path);
    }

    private function getViewPath(string $path): string
    {
        $path = str_replace('.', '/', $path);
        $publish_vendor_folder = config('components-app.publish_vendor_folder');

        return $this->isViewPublished($path)
            ? "vendor/{$publish_vendor_folder}/{$path}"
            : "Components::{$path}";
    }

    private function isViewPublished($path): bool
    {
        $publish_vendor_folder = config('components-app.publish_vendor_folder');

        return file_exists(resource_path("views/vendor/{$publish_vendor_folder}/{$path}.blade.php"));
    }
}
