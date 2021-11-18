<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Components;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class RedPill extends Pagination
{
    public function render()
    {
        $this->showDisabledButtons = true;

        return $this->paginateView(
            'pagination.red-pill.tailwind',
            'pagination.red-pill.simple-tailwind'
        );
    }
}
