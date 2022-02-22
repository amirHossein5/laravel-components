<?php

namespace AmirHossein5\LaravelComponents\Tests;

use AmirHossein5\LaravelComponents\ComponentServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    use InteractsWithViews;
    use PaginationTestable;

    /**
     * Those components that provide style asset.
     */
    protected $hasStyleAsset = [
        'pagination',
    ];

    /**
     * Those components that provide script asset.
     */
    protected $hasScriptAsset = [];

    /**
     * Some unique content for each theme.
     */
    protected $uniqueContent = [
        'pagination' => [
            'light'            => ['bg-blue-500', 'border-blue-500'],
            'gray'             => ['bg-gray-500', 'border-gray-500'],
            'gray-circled'     => [
                'bg-gray-500', 'w-10', 'rounded-full', 'h-10', '-ml-px', 'style="box-shadow: 0px 0px 6px #3a3a3a;"',
            ],
            'light-circled'    => [
                'bg-blue-500', 'w-10', 'rounded-full', 'h-10', '-ml-px', 'style="box-shadow: 0px 0px 3px #01595e;"',
            ],
            'light-underlined' => ['border-b-2', 'border-blue-500'],
            'red-pill'         => ['bg-red-600', 'border-red-600'],
        ],
    ];

    public function setUp(): void
    {
        parent::setUp();
        //
    }

    protected function getPackageProviders($app)
    {
        return [
            ComponentServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        //
    }
}
