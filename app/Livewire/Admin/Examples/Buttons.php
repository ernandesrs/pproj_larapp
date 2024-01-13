<?php

namespace App\Livewire\Admin\Examples;

use App\Livewire\Admin\Builders\Breadcrumb;
use App\Livewire\Traits\IsPage;
use Livewire\Component;

class Buttons extends Component
{
    use IsPage;

    public $variant = 'primary';
    public $size = null;
    public $style = null;

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.examples.buttons')
            ->layout('livewire.admin.layout')
            ->title('Buttons');
    }

    function pageTitle()
    {
        return __('Buttons');
    }

    function pageSubtitle()
    {
        return '';
    }

    function pageBreadcrumb()
    {
        return (new Breadcrumb);
    }

    function pageCreateButton()
    {
        return null;
    }

}
