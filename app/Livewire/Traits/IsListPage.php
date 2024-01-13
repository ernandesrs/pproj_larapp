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
    #[Url(except: '')]
    public $search = '';

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
     * List show button
     *
     * @return null|array Hidden button when return null.
     * Show if return array like:
     * [
     *      'permission' => 'show_users',
     *      'href' => 'https://ww.../admin/users/_id_/show
     * ]
     */
    public abstract function listShowButton();

    /**
     * List edit button
     *
     * @return null|array Hidden button when return null.
     * Edit if return array like:
     * [
     *      'permission' => 'edit_users',
     *      'href' => 'https://ww.../admin/users/_id_/edit
     * ]
     */
    public abstract function listEditButton();

    /**
     * List delete button
     *
     * @return null|array Hidden button when return null. Show if return array like: ['permission' => 'delete_user', 'methodName' => 'delete']
     */
    public abstract function listDeleteButton();

    /**
     * Get list
     *
     * @return mixed
     */
    public function getList()
    {
        return ($this->modelClass())::query()->orderBy('created_at', 'asc')->paginate(15);
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

    /**
     * Get show button
     *
     * @return null|array
     */
    public function getListShowButton()
    {
        return $this->listShowButton();
    }

    /**
     * Get edit button
     *
     * @return null|array
     */
    public function getListEditButton()
    {
        return $this->listEditButton();
    }

    /**
     * Get delete button
     *
     * @return null|array
     */
    public function getListDeleteButton()
    {
        return $this->listDeleteButton();
    }

    /**
     * Check if list has actions defined
     *
     * @return bool
     */
    public function listHasActions()
    {
        return $this->getListShowButton() || $this->getListEditButton() || $this->getListDeleteButton();
    }
}