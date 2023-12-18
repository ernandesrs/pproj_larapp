<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Validate;
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
                'title' => 'Sign in to your account!',
                'subtitle' => 'Access your account and access all our free resources right now'
            ])
            ->title('Sign in to your account!');
    }

    public function login()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();

        if (!$user || !\Auth::attempt(['email' => $user->email, 'password' => $this->password])) {
            $this->addError('email', 'E-mail and/or password is inválid');
            return;
        }

        return $this->redirectRoute('customer.index');
    }
}
