<?php


namespace AmirHossein5\LaravelComponents\Components\Pagination\Traits;

use Illuminate\View\View;

trait Renderable
{
    protected function view($defaultView, $simpleView): View
    {
        !$this->isSimplePaginate()
            ? $this->setNumberOfPages()
            : '';

        $variables = $this->getVariables();
        $viewsPath = $this->getViewsPath($defaultView, $simpleView);

        return $this->isSimplePaginate()
            ? view($viewsPath['simple'], $variables)
            : view($viewsPath['default'], $variables);
    }

    private function getViewsPath($defaultView, $simpleView): array
    {
        $views = [];

        $defaultView = str_replace('.', '/', $defaultView);
        $simpleView = str_replace('.', '/', $simpleView);

        $views['default'] = file_exists(resource_path("views/vendor/laravel-components/{$defaultView}.blade.php"))
            ? "vendor/laravel-components/{$defaultView}"
            : "Components::{$defaultView}";

        $views['simple'] = file_exists(resource_path("views/vendor/laravel-components/{$simpleView}.blade.php"))
            ? "vendor/laravel-components/{$simpleView}"
            : "Components::{$simpleView}";

        return $views;
    }
}
