<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Livewire\TraitChart;
use Livewire\Component;

class Examples extends Component
{
    use TraitChart;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->typeDoughnut();
        $this->addTitles('Lorexample dolorem sit');
        $this->addData('Example #1', 33, '#2E9AFE');
        $this->addData('Example #2', 12, '#00DE74');
        $this->addData('Example #3', 43, '#FE4100');
        $this->addData('Example #4', 23, '#5958FB');
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.home.charts.examples');
    }
}
