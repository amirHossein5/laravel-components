<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class GrayCircled extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'pagination.tailwind.gray-circled.tailwind',
            'pagination.tailwind.gray-circled.simple-tailwind'
        );
    }
}
