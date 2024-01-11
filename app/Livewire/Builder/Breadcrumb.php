<?php

namespace App\Livewire\Builder;

class Breadcrumb
{
    /**
     * Breadcrumb
     *
     * @var array
     */
    private $breadcrumb = [];

    /**
     * Constructor
     *
     * @param string $label
     * @param array $route
     * @param string|null $title
     * @return Breadcrumb
     */
    public function add(string $label, array $route, ?string $title = null)
    {
        $this->breadcrumb[] = [
            'label' => $label,
            'route' => $route
        ];

        return $this;
    }

    /**
     * Breadcrumb
     *
     * @return array
     */
    public function get()
    {
        return $this->breadcrumb;
    }
}