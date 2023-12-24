<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire..auth.register')
            ->layout('livewire.auth.layout', [
                'title' => __('phrases.create_account'),
                'subtitle' => __('phrases.create_account_long')
            ])
            ->title(__('phrases.create_account'));
    }
}
