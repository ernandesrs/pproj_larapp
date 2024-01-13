<?php

namespace App\Livewire\Admin\Examples;

use App\Livewire\Admin\Builders\Breadcrumb;
use App\Livewire\Traits\IsPage;
use Livewire\Component;

class Sections extends Component
{
    use IsPage;

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.examples.sections')
            ->layout('livewire.admin.layout')
            ->title('Sections');
    }

    function pageTitle()
    {
        return __('Sections');
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
