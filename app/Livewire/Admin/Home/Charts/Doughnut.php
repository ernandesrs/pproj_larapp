<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Livewire\TraitChart;
use Livewire\Component;

class Doughnut extends Component
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

        $this->addLabels([
            'Label #1',
            'Label #2'
        ]);

        $this->addDataset('Dataset #1', 33, '#2E9AFE');
        $this->addDataset('Dataset #1', 12, '#00DE74');

        $this->addDataset('Dataset #2', 24, '#2E9AFE');
        $this->addDataset('Dataset #2', 72, '#00DE74');
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.home.charts.doughnut');
    }
}
