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
     * Title
     *
     * @var null|string
     */
    public null|string $datasetTitle = '';

    /**
     * Data
     *
     * @var array
     */
    public array $labels = [];

    /**
     * Data
     *
     * @var array
     */
    public array $values = [];

    /**
     * Data
     *
     * @var array
     */
    public array $colors = [];

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
     * Chart titles
     *
     * @param string|null $title
     * @param string|null $datasetTitle
     * @return void
     */
    public function addTitles(?string $title = null, ?string $datasetTitle = null)
    {
        $this->title = $title;
        $this->datasetTitle = $datasetTitle;
    }

    /**
     * Chart data
     *
     * @param string $label
     * @param mixed $value
     * @param string $color
     * @return void
     */
    public function addData(string $label, mixed $value, string $color)
    {
        $this->addLabel($label);
        $this->addValue($value);
        $this->addColor($color);
    }

    /**
     * Chart label
     *
     * @param string $label
     * @return void
     */
    public function addLabel(string $label)
    {
        $this->labels[] = $label;
    }

    /**
     * Chart value
     *
     * @param mixed $value
     * @return void
     */
    public function addValue(mixed $value)
    {
        $this->values[] = $value;
    }

    /**
     * Chart color
     *
     * @param string $color
     * @return void
     */
    public function addColor(string $color)
    {
        $this->colors[] = $color;
    }
}