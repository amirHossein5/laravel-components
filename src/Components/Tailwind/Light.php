<?php

namespace AmirHossein5\LaravelComponents\Components\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination;

class Light extends Pagination
{
    public function render()
    {
        return $this->view(
            'vendor.laravel-components.pagination.tailwind.light.tailwind',
            'vendor.laravel-components.pagination.tailwind.light.simple-tailwind'
        );
    }
}
