<?php

namespace App\Livewire\Admin\Users;

use App\Helpers\Alert;
use App\Models\User;
use App\Services\UserService;
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
     * Data
     *
     * @var array
     */
    public $data = [];

    /**
     * Mount component
     *
     * @param User $user
     * @return void
     */
    public function mount(User $user)
    {
        $this->user = $user;
        $this->data = $this->user->toArray();
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

    /**
     * Update user
     *
     * @return void
     */
    public function update()
    {
        $validated = $this->validate(UserService::getBasicDataRules());

        if (!UserService::update($this->user, $validated['data'])) {
            Alert::error(__('messages.alert.update_fail'))->float()->addAlert($this);
            return;
        }

        Alert::success(__('messages.alert.user_updated'))->float()->addAlert($this);
    }

    public function updatePassword()
    {
        sleep(3);
    }
}