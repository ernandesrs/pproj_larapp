<?php

namespace App\Livewire\Customer\Account;

use App\Helpers\Alert;
use App\Services\UserService;
use Livewire\Component;
use Livewire\WithFileUploads;

class Picture extends Component
{
    use WithFileUploads;

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
        $this->data = [
            'photo' => null
        ];
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..customer.account.picture');
    }

    /**
     * Upload picture
     *
     * @return void
     */
    public function uploadPicture()
    {
        $validated = $this->validate(UserService::getPhotoDataRules());

        if (!UserService::updatePhoto(\Auth::user(), $validated['data']['photo'])) {
            Alert::error(__('messages.alert.update_fail'))->float()->addAlert($this);
            return;
        }

        Alert::success(__('messages.alert.profile_updated'))->float()->addFlash();

        $this->redirect(route('customer.account'), true);
    }

    /**
     * Delete picture
     *
     * @return void
     */
    public function deletePicture()
    {
        if (!UserService::deletePhoto(\Auth::user())) {
            Alert::error(__('messages.alert.profile_update_fail'))->float()->addAlert($this);
            return;
        }

        Alert::success(__('messages.alert.profile_updated'))->float()->addFlash();

        $this->redirect(route('customer.account'), true);
    }
}
