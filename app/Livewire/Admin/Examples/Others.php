<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Others extends Component
{
    public function render()
    {
        return view('livewire..admin.examples.others')
            ->layout('livewire.admin.layout')
            ->title('Others');
        ;
    }
}
