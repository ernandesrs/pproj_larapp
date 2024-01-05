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
     * Chart titles
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