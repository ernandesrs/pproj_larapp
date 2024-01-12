<?php

namespace App\Livewire\Builders\Charts;

trait ChartBuilder
{
    /**
     * Chart type
     *
     * @var string
     */
    public string $type;

    /**
     * Title
     *
     * @var null|string
     */
    public null|string $title = '';

    /**
     * Subtitle
     *
     * @var null|string
     */
    public null|string $subtitle = '';

    /**
     * Labels
     *
     * @var array
     */
    public array $labels = [];

    /**
     * Datasets
     *
     * @var array
     */
    public array $datasets = [];

    /**
     * Chart type is pie
     *
     * @return void
     */
    public function typePie()
    {
        $this->type = 'pie';
    }

    /**
     * Chart type is pie
     *
     * @return void
     */
    public function typeDoughnut()
    {
        $this->type = 'doughnut';
    }

    /**
     * Chart type is pie
     *
     * @return void
     */
    public function typeLine()
    {
        $this->type = 'line';
    }

    /**
     * Chart title and subtitle
     *
     * @param string|null $title
     * @param string|null $subtitle
     * @return void
     */
    public function addTitles(?string $title = null, ?string $subtitle = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Add lables
     *
     * @param array $labels
     * @return void
     */
    public function addLabels(array $labels)
    {
        $this->labels = $labels;
    }

    /**
     * Close returning a Dataset array
     *
     * @return \Closure \Closure must return a Dataset array
     */
    abstract public function chartDatasetAdderCallback();

    /**
     * Start chart
     *
     * @return void
     */
    public function startChart()
    {
        $this->addData(call_user_func($this->chartDatasetAdderCallback()));
    }

    /**
     * Update chart data and emit chart update event
     * 
     * return void
     */
    #[\Livewire\Attributes\Renderless]
    public function updateChartData()
    {
        $this->datasets = [];

        $this->addData(call_user_func($this->chartDatasetAdderCallback()));

        $this->dispatch('chart_data_updated', [
            'datasets' => $this->datasets,
            'id' => $this->id
        ]);
    }

    /**
     * Add chart data
     *
     * @param array<\App\Livewire\Builders\Charts\Dataset> $datasets
     * @return void
     */
    private function addData(array $datasets)
    {
        foreach ($datasets as $dataset) {
            if (get_class($dataset) !== Dataset::class) {
                throw new \Exception("The 'datasets' parameter must be an array of '\App\Livewire\Builders\Charts\Dataset'");
            }

            $this->addDataset($dataset->dataset, $dataset->value, $dataset->color);
        }
    }

    /**
     * Chart data
     *
     * @param string $dataset
     * @param mixed $value
     * @param null|array|string $color
     * @return void
     */
    private function addDataset(string $dataset, mixed $value, null|array|string $color)
    {
        $datasetName = \Str::slug($dataset, '_');
        $datasetIndex = array_search($datasetName, array_column($this->datasets, 'name'));

        if ($datasetIndex === false) {
            $this->datasets[] = [
                'name' => $datasetName,
                'label' => $dataset,
                'data' => [],
                'borderColor' => [],
                'backgroundColor' => [],
                'tension' => .4
            ];

            $datasetIndex = array_key_last($this->datasets);
        }

        $this->datasets[$datasetIndex]['data'][] = $value;
        $this->datasets[$datasetIndex]['borderColor'][] = in_array($this->type, ['line']) ? $color : Colors::border();
        $this->datasets[$datasetIndex]['backgroundColor'][] = $color;
    }
}