<?php

namespace AmirHossein5\LaravelComponents;

use Prophecy\Exception\Doubler\ClassNotFoundException;
use Prophecy\Exception\Doubler\MethodNotFoundException;

class LaravelComponentsAssets
{
    use PretendsToBeAFile;

    public function css($componentName)
    {
        try {
            $class = $this->getComponentAssetsClass($componentName);
            $file = $class->css();
        } catch (\Error $e) {
            throw new MethodNotFoundException(ucwords($componentName) . " component doest have any script", $class, 'js');
        }

        return $this->pretendsResponseIsFile($file, 'text/css');
    }

    public function js($componentName)
    {
        try {
            $class = $this->getComponentAssetsClass($componentName);
            $file = $class->js();
        } catch (\Error $e) {
            throw new MethodNotFoundException(ucwords($componentName) . " component doest have any script", $class, 'js');
        }

        return $this->pretendsResponseIsFile($file, 'application/javascript');
    }

    private function getComponentAssetsClass($componentName): object
    {
        $componentName = ucwords($componentName);
        $class = "AmirHossein5\\LaravelComponents\\Components\\{$componentName}\\{$componentName}Assets";

        try {
            $class = (new $class);
        } catch (\Error $e) {
            throw new ClassNotFoundException("Component \"$componentName\" not found ", $class);
        }

        return new $class;
    }
}
