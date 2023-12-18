<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Forget extends Component
{
    public function render()
    {
        return view('livewire..auth.forget')
            ->layout('livewire.auth.layout', [
                'title' => 'Recovery your account now',
                'subtitle' => 'Regain access to your account and access all our free resources right now'
            ])
            ->title('Recovery your account now');
        ;
    }
}
