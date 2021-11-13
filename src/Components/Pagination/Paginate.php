<?php

namespace AmirHossein5\LaravelComponents\Components\Pagination;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\View\Component;

class Paginate extends Component
{
    private string $classNamespace;

    public function __construct(
        private LengthAwarePaginator|Paginator $elems,
        private $prev = null,
        private $next = null,
        private $prevInResponsive = null,
        private $nextInResponsive = null,
        private $class = null,
        private $showDisabledButtons = null,
        private $showPaginatorDetails = null,
        private string $theme = 'tailwind-light',
    ) {
        $technologyName = ucwords(explode('-', $theme)[0]);

        $themeName = str_replace(' ', '', ucwords(implode(' ', array_slice(explode('-', $theme), 1))));

        $this->classNamespace = "AmirHossein5\\LaravelComponents\\Components\\Pagination\\{$technologyName}\\{$themeName}";
    }

    /**
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return (new $this->classNamespace($this->elems, $this->prev, $this->next, $this->prevInResponsive, $this->nextInResponsive, $this->class, $this->showDisabledButtons, $this->showPaginatorDetails))->render();
    }
}
