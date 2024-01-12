<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Livewire\Admin\Builders\Charts\ChartBuilder;
use App\Livewire\Admin\Builders\Charts\Colors;
use App\Livewire\Admin\Builders\Charts\Dataset;
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
                new Dataset('Dataset #1', 10, Colors::red()),
                new Dataset('Dataset #1', 73, Colors::red()),
                new Dataset('Dataset #1', 45, Colors::red()),
                new Dataset('Dataset #1', 70, Colors::red()),
                new Dataset('Dataset #1', 80, Colors::red()),
                new Dataset('Dataset #1', 90, Colors::red()),

                new Dataset('Dataset #2', 30, Colors::green()),
                new Dataset('Dataset #2', 53, Colors::green()),
                new Dataset('Dataset #2', 35, Colors::green()),
                new Dataset('Dataset #2', 90, Colors::green()),
                new Dataset('Dataset #2', 78, Colors::green()),
                new Dataset('Dataset #2', 57, Colors::green()),

                new Dataset('Dataset #3', 40, Colors::orange()),
                new Dataset('Dataset #3', 89, Colors::orange()),
                new Dataset('Dataset #3', 102, Colors::orange()),
                new Dataset('Dataset #3', 78, Colors::orange()),
                new Dataset('Dataset #3', 91, Colors::orange()),
                new Dataset('Dataset #3', 67, Colors::orange()),

                new Dataset('Dataset #4', 80, Colors::violet()),
                new Dataset('Dataset #4', 8, Colors::violet()),
                new Dataset('Dataset #4', 73, Colors::violet()),
                new Dataset('Dataset #4', 8, Colors::violet()),
                new Dataset('Dataset #4', 105, Colors::violet()),
                new Dataset('Dataset #4', 75, Colors::violet()),
            ];
        };
    }
}
