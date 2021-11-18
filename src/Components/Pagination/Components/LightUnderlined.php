<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Components;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class LightUnderlined extends Pagination
{
    public function render()
    {
        $this->showDisabledButtons = true;

        return $this->paginateView(
            'pagination.light-underlined.tailwind',
            'pagination.light-underlined.simple-tailwind'
        );
    }
}
