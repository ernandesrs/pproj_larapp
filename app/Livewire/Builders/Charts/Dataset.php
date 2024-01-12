<?php

namespace App\Livewire\Builders\Charts;

class Dataset
{
    /**
     * Dataset name
     *
     * @var string
     */
    public string $name;

    /**
     * Constructor
     *
     * @param string $dataset
     * @param mixed $value
     * @param null|array|string $color
     */
    public function __construct(public string $dataset, public mixed $value, public null|array|string $color)
    {
        $this->name = \Str::slug($dataset, '_');
    }
}