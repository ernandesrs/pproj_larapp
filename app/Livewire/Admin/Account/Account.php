<?php

namespace App\Livewire\Admin\Account;

use Livewire\Component;

class Account extends Component
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
        return view('livewire..admin.account.account')
            ->layout('livewire.admin.layout')
            ->title(__('phrases.my_account'));
    }
}
