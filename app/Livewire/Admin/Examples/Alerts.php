<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Alerts extends Component
{
    public function render()
    {
        return view('livewire..admin.examples.alerts')
            ->layout('livewire.admin.default')
            ->title('Alerts');
        ;
    }
}
