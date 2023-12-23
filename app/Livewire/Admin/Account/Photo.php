<?php

namespace App\Livewire\Admin\Account;

use App\Helpers\Alert;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Photo extends Component
{
    use WithFileUploads;

    /**
     * Photo
     *
     * @var mixed
     */
    public $photo = null;

    public $currentPhoto = null;

    public function __construct()
    {
        $this->currentPhoto = \Storage::url(\Auth::user()->photo);
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

    public function uploadPhoto()
    {
        $validated = $this->validate();

        $this->updtPhoto($validated['photo']);
    }

    private function updtPhoto($photo)
    {
        if ($oldPhoto = \Auth::user()->photo) {
            \Storage::disk('public')->delete($oldPhoto);
        }

        $newPhoto = $photo->store('avatars', 'public');
        if (!\Auth::user()->update(['photo' => $newPhoto])) {
            Alert::danger('Fail on update your profile photo')->float()->addAlert($this);
            return;
        }

        $this->currentPhoto = \Storage::url($newPhoto);
        Alert::success('Your profile photo has been updated successfully.')->float()->addAlert($this);
    }

    /**
     * Rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            'photo' => ['required', 'file', 'mimes:jpeg,jpg,png', 'max:1024', 'dimensions:min_width=250,min_height=250']
        ];
    }
}
