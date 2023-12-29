<?php

namespace App\Livewire\Customer\Settings;

use Livewire\Component;

class Setting extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..customer.settings.setting')
            ->layout('livewire.customer.layout')
            ->title(__('words.settings'));
    }
}
