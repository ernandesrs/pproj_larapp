<?php

namespace App\Livewire\Admin\Home;

use Livewire\Component;

class Home extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.home.home')
            ->layout('livewire.admin.layout')
            ->title('Admin Dashboard');
    }
}
