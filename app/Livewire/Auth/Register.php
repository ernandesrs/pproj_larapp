<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire..auth.register')
            ->layout('livewire.auth.layout', [
                'title' => 'Create your account now',
                'subtitle' => 'Create your account and access all our free resources right now'
            ])
            ->title('Create your account now');
    }
}
