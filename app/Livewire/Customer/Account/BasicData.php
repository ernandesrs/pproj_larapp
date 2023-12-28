<?php

namespace App\Livewire\Customer\Account;

use App\Helpers\Alert;
use App\Services\UserService;
use Livewire\Component;

class BasicData extends Component
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
        $this->data = \Auth::user()->toArray();
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..customer.account.basic-data');
    }

    /**
     * Update
     *
     * @return void
     */
    public function update()
    {
        $validated = $this->validate(UserService::getBasicDataRules());

        if (!UserService::update(\Auth::user(), $validated['data'])) {
            Alert::error(__('messages.alert.profile_update_fail'))->float()->addAlert($this);
            return;
        }

        Alert::success(__('messages.alert.profile_updated'))->float()->addAlert($this);
    }
}
