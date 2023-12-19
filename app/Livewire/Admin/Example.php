<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Example extends Component
{
    public function render()
    {
        return view('livewire..admin.example')
            ->layout('livewire.admin.default')
            ->title('Examples');
    }
}
