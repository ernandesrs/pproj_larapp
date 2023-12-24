<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Forget extends Component
{
    public function render()
    {
        return view('livewire..auth.forget')
            ->layout('livewire.auth.layout', [
                'title' => __('phrases.recovery_account'),
                'subtitle' => __('phrases.recovery_account_long')
            ])
            ->title(__('phrases.recovery_account'));
        ;
    }
}
