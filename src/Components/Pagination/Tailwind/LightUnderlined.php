<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class LightUnderlined extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'pagination.tailwind.light-underlined.tailwind',
            'pagination.tailwind.light-underlined.simple-tailwind'
        );
    }
}
