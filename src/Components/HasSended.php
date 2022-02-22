<?php

namespace AmirHossein5\LaravelComponents\Components;

use ReflectionClass;
use ReflectionMethod;

trait HasSended
{
    /**
     * Pass all received parameters.
     */
    protected function setParametersToPropertiesIfPassed(array|string $except, ...$params): void
    {
        $class = $this->getParentClass();
        $reflectionMethod = new ReflectionMethod($class, '__construct');
        $methodParameters = $reflectionMethod->getParameters();
        $methodParameters = $this->deleteExceptParameters($except, $methodParameters);

        foreach ($params as $key => $value) {
            if ($value !== null) {
                $this->{$methodParameters[$key]->name} = $value;
            }
        }
    }

    private function deleteExceptParameters(array|string $except, $allParameters): array
    {
        foreach ($allParameters as $key => $parameter) {
            if (is_string($except)) {
                if ($parameter->name === $except) {
                    unset($allParameters[$key]);
                }
            } else {
                foreach ($except as $item) {
                    if ($parameter->name === $item) {
                        unset($allParameters[$key]);
                    }
                }
            }
        }

        return array_values($allParameters);
    }

    private function getParentClass(): string
    {
        return (new ReflectionClass($this))->getParentClass()->name;
    }
}
