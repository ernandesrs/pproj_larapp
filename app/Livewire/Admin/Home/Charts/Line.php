<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Livewire\TraitChart;
use Livewire\Component;

class Line extends Component
{
    use TraitChart;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->typeLine();
        $this->addTitles('Lorexample dolorem sit', 'Lorem subtitle example');

        $this->addLabels([
            'Label #1',
            'Label #2',
            'Label #3',
            'Label #4',
            'Label #5',
            'Label #6',
        ]);

        $this->addDataset('Dataset #1', 33, '#2E9AFE');
        $this->addDataset('Dataset #1', 12, '#2E9AFE');
        $this->addDataset('Dataset #1', 43, '#2E9AFE');
        $this->addDataset('Dataset #1', 43, '#2E9AFE');
        $this->addDataset('Dataset #1', 53, '#2E9AFE');
        $this->addDataset('Dataset #1', 13, '#2E9AFE');

        $this->addDataset('Dataset #2', 13, '#FE4100');
        $this->addDataset('Dataset #2', 22, '#FE4100');
        $this->addDataset('Dataset #2', 101, '#FE4100');
        $this->addDataset('Dataset #2', 101, '#FE4100');
        $this->addDataset('Dataset #2', 31, '#FE4100');
        $this->addDataset('Dataset #2', 81, '#FE4100');
        $this->addDataset('Dataset #2', 43, '#FE4100');

        $this->addDataset('Dataset #4', 23, '#FFEE00');
        $this->addDataset('Dataset #4', 12, '#FFEE00');
        $this->addDataset('Dataset #4', 51, '#FFEE00');
        $this->addDataset('Dataset #4', 16, '#FFEE00');
        $this->addDataset('Dataset #4', 29, '#FFEE00');
        $this->addDataset('Dataset #4', 30, '#FFEE00');
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.home.charts.line');
    }
}
