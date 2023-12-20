<?php

namespace App\Livewire\Admin\Examples;

use Livewire\Component;

class Alerts extends Component
{
    public $type = 'default';

    public $title = 'Success title';

    public $text = 'This is a lorem success alert';

    public function render()
    {
        return view('livewire..admin.examples.alerts')
            ->layout('livewire.admin.default')
            ->title('Alerts');
        ;
    }

    public function showAlert()
    {
        $this->dispatch('alert', \App\Helpers\Alert::add($this->text, $this->title, $this->type)->data());
    }

    public function showFloatAlert()
    {
        $this->dispatch('alert', \App\Helpers\Alert::add($this->text, $this->title, $this->type)->float()->data());
    }

    public function showSessionAlert()
    {
        \App\Helpers\Alert::add($this->text, $this->title, $this->type)->addFlash();

        $this->redirect(route('admin.examples.alerts'), true);
    }

    public function showFloatSessionAlert()
    {
        \App\Helpers\Alert::add($this->text, $this->title, $this->type)->float()->addFlash();

        $this->redirect(route('admin.examples.alerts'), true);
    }
}
