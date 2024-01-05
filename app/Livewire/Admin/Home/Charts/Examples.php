<?php

namespace App\Livewire\Admin\Home\Charts;

use Livewire\Component;

class Examples extends Component
{
    /**
     * Title
     *
     * @var string
     */
    public string $title;

    /**
     * Title
     *
     * @var string
     */
    public string $dataSetLabel;

    /**
     * Data
     *
     * @var array
     */
    public array $data;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->title = 'Lorexample dolorem sit';
        $this->dataSetLabel = 'Lorem example';
        $this->data = [
            [
                'label' => 'Example #1',
                'value' => 33,
                'color' => '#2E9AFE'
            ],
            [
                'label' => 'Example #2',
                'value' => 12,
                'color' => '#00DE74'
            ],
            [
                'label' => 'Example #3',
                'value' => 43,
                'color' => '#FE4100'
            ],
            [
                'label' => 'Example #4',
                'value' => 23,
                'color' => '#5958FB'
            ],
        ];
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
