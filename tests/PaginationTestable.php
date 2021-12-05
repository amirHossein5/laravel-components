<?php

namespace AmirHossein5\LaravelComponents\Tests;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

trait PaginationTestable
{
    protected function makePagination(bool $simplePagination = false, int $currentPage = 1): Paginator|LengthAwarePaginator
    {
        $items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        return $simplePagination
            ? new Paginator($items, 2, $currentPage)
            : new LengthAwarePaginator($items, 10, 2, $currentPage);
    }
}
