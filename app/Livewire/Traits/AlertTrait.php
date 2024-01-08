<?php

namespace App\Livewire\Traits;

use App\Helpers\Alert;

trait AlertTrait
{
    /**
     * Add a default alert
     *
     * @param string $message
     * @param boolean $flash
     * @return void
     */
    protected function alertDefault(string $message, bool $flash = false)
    {
        return $this->alert($message, 'default', $flash);
    }

    /**
     * Add a success alert
     *
     * @param string $message
     * @param boolean $flash
     * @return void
     */
    protected function alertSuccess(string $message, bool $flash = false)
    {
        return $this->alert($message, 'success', $flash);
    }

    /**
     * Add a info alert
     *
     * @param string $message
     * @param boolean $flash
     * @return void
     */
    protected function alertInfo(string $message, bool $flash = false)
    {
        return $this->alert($message, 'info', $flash);
    }

    /**
     * Add a danger alert
     *
     * @param string $message
     * @param boolean $flash
     * @return void
     */
    protected function alertDanger(string $message, bool $flash = false)
    {
        return $this->alert($message, 'danger', $flash);
    }

    /**
     * Add a error alert
     *
     * @param string $message
     * @param boolean $flash
     * @return void
     */
    protected function alertError(string $message, bool $flash = false)
    {
        return $this->alert($message, 'error', $flash);
    }

    /**
     * Add a float alert
     *
     * @param string $message
     * @param string $type
     * @param boolean $flash
     * @return void
     */
    protected function alert(string $message, string $type = 'success', bool $flash = false)
    {
        $alert = Alert::add($message, null, $type, true);
        return $flash ? $alert->addFlash() : $alert->addAlert($this);
    }
}