<?php

namespace App\Livewire\Admin\Account;

use App\Helpers\Alert;
use App\Services\UserService;
use Livewire\Component;

class Password extends Component
{
    /**
     * Password
     *
     * @var array
     */
    public $data = [];

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
     * Render component
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.account.password');
    }

    /**
     * Update password
     *
     * @return void
     */
    public function update()
    {
        $validated = $this->validate();

        if (!\Auth::user()->update(['password' => \Hash::make($validated['data']['password'])])) {
            Alert::danger(__('messages.alert.profile_update_fail'))->float()->addAlert($this);
            return;
        }

        $this->data = UserService::getPasswordDataFields();

        Alert::success(__('messages.alert.profile_updated'))->float()->addAlert($this);
    }

    /**
     * Password rules
     *
     * @return array
     */
    public function rules()
    {
        return UserService::getPasswordDataRules();
    }
}
