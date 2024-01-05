<?php

namespace App\Livewire;

trait TraitChart
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
     * @var string
     */
    public string $title = '';

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
     * Chart titles
     *
     * @param string|null $title
     * @return void
     */
    public function addTitle(?string $title = null)
    {
        $this->title = $title;
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
     * Chart data
     *
     * @param string $dataset
     * @param mixed $value
     * @param string $color
     * @return void
     */
    public function addDataset(string $dataset, mixed $value, string $color)
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
        $this->datasets[$datasetIndex]['borderColor'][] = in_array($this->type, ['line']) ? $color : '#ffffff';
        $this->datasets[$datasetIndex]['backgroundColor'][] = $color;
    }
}