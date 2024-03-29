<?php

namespace App\Livewire\Admin\Users;

use App\Enums\Admin\UserPermissionsEnum;
use App\Models\User;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Show extends Component
{
    /**
     * User
     *
     * @var User
     * 
     */
    #[Locked]
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
     * Render show view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(UserPermissionsEnum::VIEW->value);

        return view('livewire..admin.users.show', [
            'title' => __('words.see') . ' ' . __('words.user')
        ])->layout('livewire.admin.layout')
            ->title(__('words.see') . ' ' . __('words.user'));
    }
}
