<?php

namespace AmirHossein5\LaravelComponents\Components\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination;

class GrayCircled extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'vendor.laravel-components.pagination.tailwind.gray-circled.tailwind',
            'vendor.laravel-components.pagination.tailwind.gray-circled.simple-tailwind'
        );
    }
}
