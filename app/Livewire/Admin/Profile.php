<?php

namespace App\Livewire\Admin;

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
     * @return void
     */
    public function render()
    {
        return view('livewire..admin.profile')
            ->layout('livewire.admin.layout')
            ->title('Dashboard');
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

    public function updatePassword()
    {
        $validated = $this->validate();

        if (!\Auth::user()->update(['password' => \Hash::make($validated['password']['password'])])) {
            Alert::danger('Password update fails')->float()->addAlert($this);
            return;
        }

        $this->password = [
            'password' => null,
            'password_confirmation' => null
        ];

        Alert::success('Your password has been updated successfully.')->float()->addAlert($this);
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
            'data.gender' => ['nullable', 'string', Rule::in('n', 'm', 'f')],

            'password' => ['array'],
            'password.password' => ['required', 'confirmed'],
        ];
    }
}
