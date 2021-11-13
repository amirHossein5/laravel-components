<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class RedPill extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'pagination.tailwind.red-pill.tailwind',
            'pagination.tailwind.red-pill.simple-tailwind'
        );
    }
}
