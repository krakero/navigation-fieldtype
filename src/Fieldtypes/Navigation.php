<?php

namespace Krakero\NavigationFieldtype\Fieldtypes;

use Statamic\Facades\Nav;
use Statamic\Fields\Fieldtype;

class Navigation extends Fieldtype
{
    protected $navOptions;

    public function __construct()
    {
        $this->navOptions = Nav::all()->map(function ($nav) {
            return [
                'handle' => $nav->id(),
                'title' => $nav->title(),
            ];
        });
    }

    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param  mixed  $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param  mixed  $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }

    public function preload(): array
    {
        return [
            'navOptions' => $this->navOptions,
        ];
    }
}
