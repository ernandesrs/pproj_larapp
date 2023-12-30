<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Index extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.examples.index')
            ->layout('livewire.admin.layout')
            ->title('Examples');
    }
}
