<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Helpers\Charts\ChartBuilder;
use App\Helpers\Charts\Dataset;
use Livewire\Component;

class Line extends Component
{
    use ChartBuilder;

    /**
     * Chart id
     *
     * @var string
     */
    public string $id = 'home_line_chart';

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

        $this->startChart();
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

    /**
     * Undocumented function
     *
     * @return \Closure
     */
    public function chartDatasetAdderCallback()
    {
        return function () {
            return [
                new Dataset('Dataset #1', 10, '#F44336'),
                new Dataset('Dataset #1', 73, '#F44336'),
                new Dataset('Dataset #1', 45, '#F44336'),
                new Dataset('Dataset #1', 70, '#F44336'),
                new Dataset('Dataset #1', 80, '#F44336'),
                new Dataset('Dataset #1', 90, '#F44336'),

                new Dataset('Dataset #2', 30, '#00FF90'),
                new Dataset('Dataset #2', 53, '#00FF90'),
                new Dataset('Dataset #2', 35, '#00FF90'),
                new Dataset('Dataset #2', 90, '#00FF90'),
                new Dataset('Dataset #2', 78, '#00FF90'),
                new Dataset('Dataset #2', 57, '#00FF90'),

                new Dataset('Dataset #3', 40, '#D79090'),
                new Dataset('Dataset #3', 89, '#D79090'),
                new Dataset('Dataset #3', 102, '#D79090'),
                new Dataset('Dataset #3', 78, '#D79090'),
                new Dataset('Dataset #3', 91, '#D79090'),
                new Dataset('Dataset #3', 67, '#D79090')
            ];
        };
    }
}
