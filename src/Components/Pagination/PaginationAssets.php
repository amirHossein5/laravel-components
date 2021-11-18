<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination;

use AmirHossein5\LaravelComponents\Components\MustHaveStylesheet;
use AmirHossein5\LaravelComponents\Components\Pathable;

class PaginationAssets implements MustHaveStylesheet
{
    use Pathable;

    public function css(): string
    {
        return $this->assets_path('css/pagination.css');
    }
}
