<?php

namespace AmirHossein5\LaravelComponents\Components\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination;

class RedPill extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'vendor.laravel-components.pagination.tailwind.red-pill.tailwind',
            'vendor.laravel-components.pagination.tailwind.red-pill.simple-tailwind'
        );
    }
}
