<?php

namespace App\Livewire\Admin\Account;

use App\Helpers\Alert;
use App\Services\UserService;
use Livewire\Component;

class BasicData extends Component
{
    /**
     * Profile data
     *
     * @var array
     */
    public $data = [];

    /**
     * Contructor
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
        return view('livewire..admin.account.basic-data');
    }

    /**
     * Update profile data
     *
     * @return void
     */
    public function updateBasicData()
    {
        $validated = $this->validate();

        UserService::update(\Auth::user(), $validated['data']);

        Alert::success(__('messages.alert.profile_updated'))->float()->addAlert($this);
    }

    /**
     * Profile data rules
     *
     * @return array
     */
    public function rules()
    {
        return UserService::getBasicDataRules();
    }
}
