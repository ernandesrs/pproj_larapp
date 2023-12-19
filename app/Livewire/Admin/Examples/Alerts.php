<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Alerts extends Component
{
    public $alert = [
        'type' => 'success',
        'float' => 0,
        'title' => null,
        'text' => null,
    ];

    public function render()
    {
        return view('livewire..admin.examples.alerts')
            ->layout('livewire.admin.default')
            ->title('Alerts');
        ;
    }

    public function showAlert()
    {
        $this->alert['title'] = 'Normal alert';
        $this->alert['text'] = 'This is a normal alert text';
    }

    public function showSessionAlert()
    {
        $this->alert['title'] = 'Normal session alert';
        $this->alert['text'] = 'This is a normal session alert text';

        session()->flash('alert', $this->alert);
        $this->redirect(route('admin.examples.alerts'), true);
    }

    public function showFloatAlert()
    {
        $this->alert['title'] = 'Float alert';
        $this->alert['text'] = 'This is a float alert text';
        $this->alert['float'] = 1;
    }

    public function showFloatSessionAlert()
    {
        $this->alert['title'] = 'Float session alert';
        $this->alert['text'] = 'This is a float session alert text';
        $this->alert['float'] = 1;

        session()->flash('alert', $this->alert);
        $this->redirect(route('admin.examples.alerts'), true);
    }
}
