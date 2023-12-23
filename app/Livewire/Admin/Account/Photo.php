<?php

namespace App\Livewire\Admin\Account;

use App\Helpers\Alert;
use Illuminate\Http\Request;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Photo extends Component
{
    use WithFileUploads;

    /**
     * Listeners
     *
     * @var array
     */
    protected $listeners = ['filePreValidated' => 'handleFilePreValidation'];

    /**
     * Photo
     *
     * @var mixed
     */
    public $photo = null;

    /**
     * Constructor
     */
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

    /**
     * Upload photo
     *
     * @return void
     */
    public function uploadPhoto()
    {
        $validated = $this->validate();

        $this->updtPhoto($validated['photo']);
    }

    /**
     * Delete photo
     *
     * @return void
     */
    public function deletePhoto()
    {
        sleep(2);
        if ($oldPhoto = \Auth::user()->photo) {
            \Storage::disk('public')->delete($oldPhoto);
        }

        \Auth::user()->update(['photo' => null]);

        Alert::success('Your profile photo has been deleted successfully.')->float()->addFlash();

        $this->redirect(route('admin.profile'), true);
    }

    /**
     * Delete old photo and update photo
     *
     * @param mixed $photo
     * @return void
     */
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
        Alert::success('Your profile photo has been updated successfully.')->float()->addFlash();

        $this->redirect(route('admin.profile'), true);
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
