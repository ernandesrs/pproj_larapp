<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Buttons extends Component
{
    public function render()
    {
        return view('livewire..admin.examples.buttons')
            ->layout('livewire.admin.default')
            ->title('Buttons');
    }
}
