<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Sections extends Component
{
    public function render()
    {
        return view('livewire..admin.examples.sections')
            ->layout('livewire.admin.default')
            ->title('Sections');
        ;
    }
}
