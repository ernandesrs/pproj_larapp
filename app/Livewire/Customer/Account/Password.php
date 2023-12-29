<?php

namespace App\Livewire\Customer\Account;

use App\Helpers\Alert;
use App\Services\UserService;
use Livewire\Component;

class Password extends Component
{
    /**
     * Data
     *
     * @var array
     */
    public $data;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->data = UserService::getPasswordDataFields();
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..customer.account.password');
    }

    /**
     * Update password
     *
     * @return void
     */
    public function update()
    {
        $validated = $this->validate(UserService::getPasswordDataRules());

        if (!UserService::updatePassword(\Auth::user(), $validated['data'])) {
            Alert::error(__('messages.alert.update_fail'))->float()->addAlert($this);
            return;
        }

        $this->data = UserService::getPasswordDataFields();

        Alert::success(__('messages.alert.profile_updated'))->float()->addAlert($this);
    }
}
