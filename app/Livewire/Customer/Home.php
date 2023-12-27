<?php

namespace App\Livewire\Customer;

use Livewire\Component;

class Home extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..customer.home')
            ->layout('livewire.customer.layout')
            ->title('Home dashboard');
    }
}
