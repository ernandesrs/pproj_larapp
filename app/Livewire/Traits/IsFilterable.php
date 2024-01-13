<?php

namespace App\Livewire\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Url;

trait IsFilterable
{
    /**
     * Search
     *
     * @var string
     */
    #[Url(except: '')]
    public $search = '';

    /**
     * Searchable fields
     *
     * @return null|array<string>
     */
    public abstract function searchableFields();

    /**
     * Filterable fields
     *
     * @return null|array<string>
     */
    public abstract function filterableFields();

    /**
     * Filter
     *
     * @param Model $modelInstance
     * @return Builder
     */
    public function filter(Model $modelInstance)
    {
        return $modelInstance
            ->whereRaw("MATCH(" . implode(',', static::searchableFields()) . ") AGAINST(? IN BOOLEAN MODE)", $this->search);
    }

    /**
     * 
     * 
     * 
     * 
     * 
     */

    /**
     * Check if needs show filter/search bar
     *
     * @return bool
     */
    public function showFilterAndSearchBar()
    {
        return $this->isSearchable() || $this->isFilterable();
    }

    /**
     * Check if list is searchable
     *
     * @return bool
     */
    public function isSearchable()
    {
        return static::searchableFields() ? true : false;
    }

    /**
     * Check if list is filterable
     *
     * @return bool
     */
    public function isFilterable()
    {
        return static::filterableFields() ? true : false;
    }

    /**
     * Check if list needs filter
     *
     * @return bool
     */
    private function needsFilter()
    {
        return !empty($this->search);
    }
}