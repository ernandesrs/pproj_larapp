<?php

namespace App\Livewire\Traits;

use App\Livewire\Builder\Breadcrumb;

trait IsPage
{
    /**
     * Page title
     *
     * @return string
     */
    abstract function pageTitle();

    /**
     * Page subtitle
     *
     * @return string
     */
    abstract function pageSubtitle();

    /**
     * Page breadcrumb
     *
     * @return Breadcrumb
     */
    abstract function pageBreadcrumb();

    /**
     * Get page title
     *
     * @return null|string
     */
    function getPageTitle()
    {
        return $this->pageTitle();
    }

    /**
     * Get page subtitle
     *
     * @return null|string
     */
    function getPageSubtitle()
    {
        return $this->pageSubtitle();
    }

    /**
     * Get page breadcrumb
     *
     * @return array
     */
    function getPageBreadcrumb()
    {
        return $this->pageBreadcrumb()->get();
    }

    /**
     * Layout title
     *
     * @return string
     */
    function getLayoutTitle()
    {
        return implode(' » ', array_map(fn($b) => $b['label'], $this->getPageBreadcrumb()));
    }
}