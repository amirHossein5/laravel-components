<?php

namespace AmirHossein5\LaravelComponents\Components\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination;

class LightUnderlined extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'vendor.laravel-components.pagination.tailwind.light-underlined.tailwind',
            'vendor.laravel-components.pagination.tailwind.light-underlined.simple-tailwind'
        );
    }
}
