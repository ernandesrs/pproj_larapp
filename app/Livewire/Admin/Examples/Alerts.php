<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;
use \App\Helpers\Alert;

class Alerts extends Component
{
    public $type = 'default';

    public $title = 'This is a lorem ipsum alert title';

    public $text = 'This is a lorem ipsum alert text, dolor ipsum dolorem its natus sobreuts dolorem';

    public function render()
    {
        return view('livewire..admin.examples.alerts')
            ->layout('livewire.admin.default')
            ->title('Alerts');
        ;
    }

    public function showAlert()
    {
        Alert::add($this->text, $this->title, $this->type)
            ->addAlert($this);
    }

    public function showFloatAlert()
    {
        Alert::add($this->text, $this->title, $this->type, true)
            ->addAlert($this);
    }

    public function showSessionAlert()
    {
        Alert::add($this->text, $this->title, $this->type)->addFlash();

        $this->redirect(route('admin.examples.alerts'), true);
    }

    public function showFloatSessionAlert()
    {
        Alert::add($this->text, $this->title, $this->type)->float()->addFlash();

        $this->redirect(route('admin.examples.alerts'), true);
    }
}
