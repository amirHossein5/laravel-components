<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Components;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class GrayCircled extends Pagination
{
    public function render()
    {
        $this->showDisabledButtons = true;

        return $this->paginateView(
            'pagination.gray-circled.tailwind',
            'pagination.gray-circled.simple-tailwind'
        );
    }
}
