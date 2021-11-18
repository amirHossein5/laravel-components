<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination;

use Illuminate\Pagination\Paginator;

trait Pageable
{
    public array $elements = [];  //numbers in pagination

    protected function setPageNumbers(): void
    {
        $elements = [];
        $numberOfPages = ceil($this->paginator->total() / $this->paginator->perPage());

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
