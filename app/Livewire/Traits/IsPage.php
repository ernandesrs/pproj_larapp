<?php

namespace App\Livewire\Traits;

use App\Livewire\Builders\Breadcrumb;

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
     * Create button on page header
     *
     * @return null|array Hidden if return null. Show if return array like: ['href' => '#', 'text' => 'Create user', 'permission' => 'create_user']
     */
    abstract function pageCreateButton();

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
     * Create button on page header
     *
     * @return null|array
     */
    function getPageCreateButton()
    {
        return $this->pageCreateButton();
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