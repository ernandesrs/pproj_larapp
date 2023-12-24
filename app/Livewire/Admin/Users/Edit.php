<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    /**
     * User
     *
     * @var User
     */
    public $user;

    /**
     * Mount component
     *
     * @param User $user
     * @return void
     */
    public function mount(User $user)
    {
        $this->user = $user;
    }

    /**
     * Render edit view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.users.edit', [
            'title' => __('words.edit') . ' ' . __('words.user'),
            'user' => $this->user
        ])->layout('livewire.admin.layout')->title(__('words.edit') . ' ' . __('words.user'));
    }
}
