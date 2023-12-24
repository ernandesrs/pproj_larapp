<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $email = null;

    public $password = null;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required', 'min:6']
    ];

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('livewire.auth.layout', [
                'title' => __('phrases.sign_in_your_account'),
                'subtitle' => __('phrases.sign_in_your_account_long')
            ])
            ->title(__('phrases.sign_in_your_account'));
    }

    public function login()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();

        if (!$user || !\Auth::attempt(['email' => $user->email, 'password' => $this->password])) {
            $this->addError('email', __('messages.auth.login_fail'));
            return;
        }

        return $this->redirectRoute('customer.index');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('auth.login');
    }
}
