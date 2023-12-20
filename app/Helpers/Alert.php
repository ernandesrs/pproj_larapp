<?php

namespace App\Helpers;

use Livewire\Component;
use Livewire\Events\Dispatcher;

class Alert
{
    private const ALERT_KEY = 'app_flash_alert';

    private $type;

    private $float;

    private $title;

    private $text;

    private $session;

    /**
     * Add
     *
     * @param string $text
     * @param string|null $title
     * @param string $type
     * @param boolean $float
     * @return Alert
     */
    public static function add(string $text, ?string $title = null, string $type = 'default', bool $float = false)
    {
        $alert = new Alert();

        $alert->type = $type;
        $alert->float = $float;
        $alert->title = $title;
        $alert->text = $text;
        $alert->session = false;

        return $alert;
    }

    /**
     * Default
     *
     * @param string $text
     * @param string|null $title
     * @return Alert
     */
    public static function default(string $text, ?string $title = null)
    {
        return self::add($text, $title, 'default');
    }

    /**
     * Success
     *
     * @param string $text
     * @param string|null $title
     * @return Alert
     */
    public static function success(string $text, ?string $title = null)
    {
        return self::add($text, $title, 'success');
    }

    /**
     * Info
     *
     * @param string $text
     * @param string|null $title
     * @return Alert
     */
    public static function info(string $text, ?string $title = null)
    {
        return self::add($text, $title, 'info');
    }

    /**
     * Danger
     *
     * @param string $text
     * @param string|null $title
     * @return Alert
     */
    public static function danger(string $text, ?string $title = null)
    {
        return self::add($text, $title, 'danger');
    }

    /**
     * Float alert
     *
     * @return Alert
     */
    public function float()
    {
        $this->float = true;
        return $this;
    }

    /**
     * Send alert notification
     *
     * @param \Livewire\Component $component
     * @return void
     */
    public function addAlert(Component $component)
    {
        $component->server_notifying($this->data());
    }

    /**
     * Add flash alert
     *
     * @return void
     */
    public function addFlash()
    {
        session()->flash(self::ALERT_KEY, $this->data());
    }

    /**
     * Get flash alert
     *
     * @return null|array
     */
    public static function getFlash()
    {
        return session(self::ALERT_KEY);
    }

    /**
     * Data
     *
     * @return array
     */
    public function data()
    {
        return [
            'type' => $this->type,
            'float' => $this->float,
            'title' => $this->title,
            'text' => $this->text,
        ];
    }

    /**
     * Get
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->$key;
    }

    /**
     * Set
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set(string $key, mixed $value)
    {
        $this->$key = $value;
    }
}