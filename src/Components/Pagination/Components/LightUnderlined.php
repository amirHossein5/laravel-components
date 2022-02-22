<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Components;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class LightUnderlined extends Pagination
{
    public bool $showDisabledButtons = true;

    public function render()
    {
        return $this->paginateView(
            'pagination.light-underlined.tailwind',
            'pagination.light-underlined.simple-tailwind'
        );
    }
}
