<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Components;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class LightCircled extends Pagination
{
    public function render()
    {
        $this->showDisabledButtons = true;

        return $this->paginateView(
            'pagination.light-circled.tailwind',
            'pagination.light-circled.simple-tailwind'
        );
    }
}
