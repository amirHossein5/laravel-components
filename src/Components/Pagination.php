<?php

namespace AmirHossein5\LaravelComponents\Components;

use AmirHossein5\LaravelComponents\Components\Traits\Pageable;
use AmirHossein5\LaravelComponents\Components\Traits\Renderable;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator;

class Pagination
{
    use Pageable, Renderable;

    protected string $prev = '';
    protected string $next = '';
    protected string $prevInResponsive = '';
    protected string $nextInResponsive = '';
    protected string $class = '';
    protected bool $showDisabledButtons = false;
    protected bool $showPaginatorDetails = true;

    public function __construct(
        protected LengthAwarePaginator|Paginator $paginator,
        $prev = null,
        $next = null,
        $prevInResponsive = null,
        $nextInResponsive = null,
        $class = null,
        $showDisabledButtons = null,
        $showPaginatorDetails = null,
    ) {
        // check if user passed variable or not
        if ($prev) {
            $this->prev = $prev;
        }
        if ($next) {
            $this->next = $next;
        }
        if ($prevInResponsive) {
            $this->prevInResponsive = $prevInResponsive;
        }
        if ($nextInResponsive) {
            $this->nextInResponsive = $nextInResponsive;
        }
        if ($class) {
            $this->class = $class;
        }
        if ($showDisabledButtons !== null) {
            $this->showDisabledButtons = $showDisabledButtons;
        }
        if ($showPaginatorDetails !== null) {
            $this->showPaginatorDetails = $showPaginatorDetails;
        }
    }

    protected function getVariables(): array
    {
        return [
            'paginator'             => $this->paginator,
            'prev'                  => $this->prev,
            'next'                  => $this->next,
            'prevInResponsive'      => $this->prevInResponsive,
            'nextInResponsive'      => $this->nextInResponsive,
            'class'                 => $this->class,
            'showDisabledButtons'   => $this->showDisabledButtons,
            'showPaginatorDetails'  => $this->showPaginatorDetails,
            'elements'              => $this->elements
        ];
    }
}
