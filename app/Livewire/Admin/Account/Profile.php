<?php

namespace App\Livewire\Admin\Account;

use App\Helpers\Alert;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Profile extends Component
{
    /**
     * Profile data
     *
     * @var array
     */
    public $data = [
        'first_name' => 'User',
        'last_name' => 'Last name',
        'username' => 'username',
        'gender' => null
    ];

    public $password = [
        'password' => null,
        'password_confirmation' => null
    ];

    /**
     * Contructor
     */
    public function __construct()
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
        return view('livewire..admin.account.profile')
            ->layout('livewire.admin.layout')
            ->title('My account');
    }

    /**
     * Update profile data
     *
     * @return void
     */
    public function updateBasicData()
    {
        $validated = $this->validate();

        if (!\Auth::user()->update($validated['data'])) {
            Alert::danger('Your profile data updated fails.')->float()->addAlert($this);
            return;
        }

        Alert::success('Your profile data has been updated successfully.')->float()->addAlert($this);
    }

    /**
     * Profile data rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            'data' => ['array'],
            'data.first_name' => ['required', 'string', 'max:25'],
            'data.last_name' => ['required', 'string', 'max:50'],
            'data.username' => ['required', 'string', 'max:25'],
            'data.gender' => ['nullable', 'string', Rule::in('n', 'm', 'f')]
        ];
    }
}
