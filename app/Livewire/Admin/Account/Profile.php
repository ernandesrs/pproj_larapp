<?php

namespace App\Livewire\Admin\Account;

use Livewire\Component;

class Profile extends Component
{
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
        return view('livewire..admin.account.profile')
            ->layout('livewire.admin.layout')
            ->title('My account');
    }
}
