<?php

namespace AmirHossein5\LaravelComponents\Tests\Feature;

use AmirHossein5\LaravelComponents\Tests\TestCase;

class PaginationTest extends TestCase
{
    public function test_pagination_component_renders_correctly()
    {
        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertSee('Showing');
        $blade->assertSee('results');
        $blade->assertSee('?page=4');
    }

    public function test_prev_and_next_will_change()
    {
        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users" prev="prev" next="next"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertSee('prev');
        $blade->assertSee('next');
        $blade->assertDontSee('d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"');
    }

    public function test_prev_in_responsive_and_next_in_responsive_will_change()
    {
        $blade = $this->blade(
            '<x-pagination::gray-circled
                :elems="$users"
                prevInResponsive="prevInResponsive"
                nextInResponsive="nextInResponsive"
            />',
            ['users' => $this->makePagination()]
        );

        $blade->assertSee('prevInResponsive');
        $blade->assertSee('nextInResponsive');
        $blade->assertDontSee('&amp;laquo; Previous');
        $blade->assertDontSee('Next &amp;raquo;');
    }

    public function test_showDisabledButtons_works()
    {
        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users" :showDisabledButtons="false"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertDontSee('first-button');

        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users" :showDisabledButtons="false"/>',
            ['users' => $this->makePagination(false, 3)]
        );

        $blade->assertSee('first-button');
        $blade->assertSee('last-button');

        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users" :showDisabledButtons="false"/>',
            ['users' => $this->makePagination(false, 5)]
        );

        $blade->assertDontSee('last-button');
    }

    public function test_show_paginator_details_can_disable_showing_pagination_details()
    {
        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users" :showPaginatorDetails="false"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertDontSee('Showing');
        $blade->assertDontSee('results');
    }

    public function test_class_can_be_added_to_component()
    {
        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users" class="test"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertSee('test"', false);
    }

    public function test_default_setted_variables_are_changeable()
    {
        $blade = $this->blade(
            '<x-pagination::gray :elems="$users"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertDontSee('first-button', false);

        $blade = $this->blade(
            '<x-pagination::gray :elems="$users" :showDisabledButtons="true"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertSee('first-button', false);

        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertSee('first-button', false);

        $blade = $this->blade(
            '<x-pagination::gray-circled :elems="$users" :showDisabledButtons="false"/>',
            ['users' => $this->makePagination()]
        );

        $blade->assertDontSee('first-button', false);
    }

    public function test_simple_pagination_view_is_different()
    {
        foreach (config('components-components.pagination') as $theme) {
            $blade = $this->blade(
                '<x-pagination::' . $theme . ' :elems="$users"/>',
                ['users' => $this->makePagination(true)]
            );

            $blade->assertDontSee('hidden sm:flex-1 sm:flex sm:items-center sm:justify-between');
        };
    }

    public function test_themes_load_correctly()
    {
        foreach ($this->uniqueContent['pagination'] as $theme => $contents) {
            $blade = $this->blade(
                '<x-pagination::' . $theme . ' :elems="$users"/>',
                ['users' => $this->makePagination()]
            );
            foreach ($contents as $content) {
                $blade->assertSee($content, false);
            }
        }
    }
}
