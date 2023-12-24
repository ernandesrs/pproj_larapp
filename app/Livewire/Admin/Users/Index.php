<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
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
        return view('livewire..admin.users.index', [
            'title' => __('words.users'),
            'users' => User::whereNotNull('id')->paginate(10)->withQueryString()
        ])->layout('livewire.admin.layout')
            ->title(__('words.users'));
    }
}
