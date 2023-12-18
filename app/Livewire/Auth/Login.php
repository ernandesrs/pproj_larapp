<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email = null;

    public $password = null;

    public $remember = false;

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('livewire.auth.layout', [
                'title' => 'Sign in to your account!',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti inventore quaerat mollitia?'
            ])
            ->title('Sign in to your account!');
    }
}
