<?php

namespace App\Livewire\Traits;

use Livewire\Attributes\Url;
use Livewire\WithPagination;

trait IsListPage
{
    use IsPage, WithPagination;

    /**
     * Search
     *
     * @var string
     */
    #[Url(except: ['', null, 'null'])]
    public $search;

    /**
     * Model class
     *
     * @return string
     */
    public abstract function modelClass();

    /**
     * List labels
     *
     * @return array
     */
    public abstract function listLabels();

    /**
     * Get list
     *
     * @return mixed
     */
    public function getList()
    {
        return ($this->modelClass())::query()->orderBy('created_at', 'desc')->paginate(15);
    }

    /**
     * Get list labels
     *
     * @return array
     */
    public function getListLabels()
    {
        return $this->listLabels();
    }
}