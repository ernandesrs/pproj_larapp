<?php

namespace App\Livewire\Customer\Account;

use Livewire\Component;

class Account extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..customer.account.account')
            ->layout('livewire.customer.layout')
            ->title(__('phrases.my_account'));
    }
}
