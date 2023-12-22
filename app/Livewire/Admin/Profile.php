<?php

namespace App\Livewire\Admin;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Profile extends Component
{
    public $data = [
        'first_name' => null,
        'last_name' => null,
        'username' => null,
        'gender' => null
    ];

    public function __construct()
    {
        $this->data = \Auth::user()->toArray();
    }

    public function render()
    {
        return view('livewire..admin.profile')
            ->layout('livewire.admin.layout')
            ->title('Dashboard');
    }

    public function update()
    {
        $this->validate();

        // dump($this->data);
    }

    public function rules()
    {
        return [
            'data' => ['array'],
            'data.first_name' => ['required', 'string', 'max:25'],
            'data.last_name' => ['required', 'string', 'max:50'],
            'data.username' => ['required', 'string', 'max:25'],
            'data.gender' => ['nullable', 'string', Rule::in('n', 'm', 'f')],
        ];
    }
}
