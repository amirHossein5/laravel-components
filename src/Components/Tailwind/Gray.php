<?php

namespace AmirHossein5\LaravelComponents\Components\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination;

class Gray extends Pagination
{
    public function render()
    {
        return $this->view(
            'vendor.laravel-components.pagination.tailwind.gray.tailwind',
            'vendor.laravel-components.pagination.tailwind.gray.simple-tailwind'
        );
    }
}
