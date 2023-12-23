<?php

namespace App\Livewire\Admin\Account;

use App\Helpers\Alert;
use Livewire\Component;

class Password extends Component
{
    /**
     * Password
     *
     * @var array
     */
    public $password = [
        'password' => null,
        'password_confirmation' => null
    ];

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
     * Password rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => ['array'],
            'password.password' => ['required', 'confirmed'],
        ];
    }
}