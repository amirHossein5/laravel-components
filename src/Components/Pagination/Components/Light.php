<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Components;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class Light extends Pagination
{
    public function render()
    {
        return $this->view(
            'pagination.light.tailwind',
            'pagination.light.simple-tailwind'
        );
    }
}
