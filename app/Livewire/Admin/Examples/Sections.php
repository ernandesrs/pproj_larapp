<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Sections extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.examples.sections')
            ->layout('livewire.admin.layout')
            ->title('Sections');
    }
}
