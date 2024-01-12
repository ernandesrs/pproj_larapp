<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Livewire\Builders\Charts\ChartBuilder;
use App\Livewire\Builders\Charts\Dataset;
use Livewire\Component;

class Doughnut extends Component
{
    use ChartBuilder;

    public string $id = 'home_doughnut_chart';

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

        $this->startChart();
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

    /**
     * Undocumented function
     *
     * @return \Closure
     */
    public function chartDatasetAdderCallback()
    {
        return function () {
            return [
                new Dataset('Dataset #1', 33, '#2E9AFE'),
                new Dataset('Dataset #1', 12, '#00DE74'),

                new Dataset('Dataset #2', 24, '#2E9AFE'),
                new Dataset('Dataset #2', 72, '#00DE74')
            ];
        };
    }
}
