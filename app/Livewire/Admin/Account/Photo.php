<?php

namespace App\Livewire\Admin\Account;

use App\Helpers\Alert;
use App\Services\UserService;
use Livewire\Component;
use Livewire\WithFileUploads;

class Photo extends Component
{
    use WithFileUploads;

    /**
     * Photo
     *
     * @var array
     */
    public $data;

    public function mount()
    {
        $this->data = ['photo' => null];
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.account.photo');
    }

    /**
     * Upload photo
     *
     * @return void
     */
    public function uploadPhoto()
    {
        $validated = $this->validate(UserService::getPhotoDataRules());

        UserService::updatePhoto(\Auth::user(), $validated['data']['photo']);

        Alert::success(__('messages.alert.profile_updated'))->float()->addFlash();

        $this->redirect(route('admin.account'), true);
    }

    /**
     * Delete photo
     *
     * @return void
     */
    public function deletePhoto()
    {
        UserService::deletePhoto(\Auth::user());

        Alert::success(__('messages.alert.profile_picture_deleted'))->float()->addFlash();

        $this->redirect(route('admin.account'), true);
    }
}
