<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class Gray extends Pagination
{
    public function render()
    {
        return $this->view(
            'pagination.tailwind.gray.tailwind',
            'pagination.tailwind.gray.simple-tailwind'
        );
    }
}
