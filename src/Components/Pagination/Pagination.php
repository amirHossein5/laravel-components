<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination;

use AmirHossein5\LaravelComponents\Components\HasSended;
use AmirHossein5\LaravelComponents\Components\Renderable;
use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;

abstract class Pagination extends Component
{
    use Pageable, Renderable, HasSended;

    public LengthAwarePaginator|Paginator $paginator;
    public string $prev = '';
    public string $next = '';
    public string $prevInResponsive = '';
    public string $nextInResponsive = '';
    public string $class = '';
    public bool $showDisabledButtons = false;
    public bool $showPaginatorDetails = true;

    public function __construct(
        LengthAwarePaginator|Paginator $elems,
        $prev = null,
        $next = null,
        $prevInResponsive = null,
        $nextInResponsive = null,
        $class = null,
        $showDisabledButtons = null,
        $showPaginatorDetails = null,
    ) {
        $this->setParametersToPropertiesIfPassed(
            'elems',
            $prev,
            $next,
            $prevInResponsive,
            $nextInResponsive,
            $class,
            $showDisabledButtons,
            $showPaginatorDetails
        );
        $this->paginator = $elems;
        $this->isSimplePaginate() ?: $this->setPageNumbers();
    }

    abstract public function render();

    protected function paginateView(string $defaultView, string $simpleView): View
    {
        return $this->isSimplePaginate()
            ? $this->view($simpleView)
            : $this->view($defaultView);
    }
}
