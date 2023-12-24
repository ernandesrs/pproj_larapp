<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class Create extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.users.create', [
            'title' => __('words.register') . ' ' . __('words.user')
        ])->layout('livewire.admin.layout')->title(__('words.register') . ' ' . __('words.user'));
    }
}
