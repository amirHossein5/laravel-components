<?php


namespace AmirHossein5\LaravelComponents\Components\Traits;

use Illuminate\View\View;

trait Renderable
{
    protected function view($defaultView, $simpleView): View
    {
        !$this->isSimplePaginate()
            ? $this->setNumberOfPages()
            : '';

        $variables = $this->getVariables();

        return $this->isSimplePaginate()
            ? view($simpleView, $variables)
            : view($defaultView, $variables);
    }
}
