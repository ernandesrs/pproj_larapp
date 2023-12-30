<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Buttons extends Component
{
    public $variant = 'primary';
    public $size = null;
    public $style = 'outlined';

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.examples.buttons')
            ->layout('livewire.admin.layout')
            ->title('Buttons');
    }
}
