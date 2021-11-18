<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Components;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class Gray extends Pagination
{
    public function render()
    {
        return $this->paginateView(
            'pagination.gray.tailwind',
            'pagination.gray.simple-tailwind'
        );
    }
}
