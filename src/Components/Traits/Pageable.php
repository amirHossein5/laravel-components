<?php

namespace AmirHossein5\LaravelComponents\Components\Traits;

use Illuminate\Pagination\Paginator;

trait Pageable
{
    protected array $elements = [];  //numbers in pagination

    protected function setNumberOfPages(): void
    {
        $numberOfPages = ceil($this->paginator->total() / $this->paginator->perPage());

        $elements = [];

        for ($i = 1; $i <= $numberOfPages; $i++) {
            $elements[$i] = $this->paginator->url($i);
        }

        $this->elements[] = $elements;
    }

    protected function isSimplePaginate(): bool
    {
        return $this->paginator instanceof Paginator;
    }
}
