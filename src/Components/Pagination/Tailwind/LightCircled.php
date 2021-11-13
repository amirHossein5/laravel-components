<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination\Tailwind;

use AmirHossein5\LaravelComponents\Components\Pagination\Pagination;

class LightCircled extends Pagination
{
    protected bool $showDisabledButtons = true;

    public function render()
    {
        return $this->view(
            'pagination.tailwind.light-circled.tailwind',
            'pagination.tailwind.light-circled.simple-tailwind'
        );
    }
}
