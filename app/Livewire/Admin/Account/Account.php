<?php

namespace App\Livewire\Admin\Account;

use App\Livewire\Traits\IsPage;
use App\Livewire\Admin\Builders\Breadcrumb;
use Livewire\Component;

class Account extends Component
{
    use IsPage;

    /**
     * Contructor
     */
    public function __construct()
    {
        $this->data = \Auth::user()->toArray();
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.account.account')
            ->layout('livewire.admin.layout')
            ->title($this->getLayoutTitle());
    }

    /**
     * 
     * 
     * IsPage methods
     * 
     * 
     */

    function pageTitle()
    {
        return __('phrases.my_profile');
    }

    function pageSubtitle()
    {
        return __('phrases.manage_profile_data');
    }

    function pageBreadcrumb()
    {
        return (new Breadcrumb())
            ->add(__('phrases.my_profile'), ['name' => 'admin.account']);
    }

    /**
     * Data to create button from page header
     *
     * @return null|array
     */
    function pageCreateButton()
    {
        return null;
    }
}

