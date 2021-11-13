<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class Light extends Pagination
{
    public function render()
    {
        return $this->view(
            'pagination.tailwind.light.tailwind',
            'pagination.tailwind.light.simple-tailwind'
        );
    }
}
