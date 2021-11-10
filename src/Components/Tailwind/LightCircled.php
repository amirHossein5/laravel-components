<?php

namespace AmirHossein5\LaravelComponents\Components\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination;

class LightCircled extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'vendor.laravel-components.pagination.tailwind.light-circled.tailwind',
            'vendor.laravel-components.pagination.tailwind.light-circled.simple-tailwind'
        );
    }
}
