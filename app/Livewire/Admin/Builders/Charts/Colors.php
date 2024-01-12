<?php

namespace App\Livewire\Admin\Builders\Charts;

class Colors
{
    static $theme = 'light';

    static $colors = [
        'blue' => [
            'light' => '#38bdf8',
            'dark' => '#1e40af'
        ],
        'red' => [
            'light' => '#fb7185',
            'dark' => '#9f1239'
        ],
        'green' => [
            'light' => '#34d399',
            'dark' => '#0d9488'
        ],
        'orange' => [
            'light' => '#fb923c',
            'dark' => '#b45309'
        ],
        'violet' => [
            'light' => '#818cf8',
            'dark' => '#4c1d95'
        ],
        'yellow' => [
            'light' => '#fde047',
            'dark' => '#eab308'
        ],
        'gray' => [
            'light' => '#94a3b8',
            'dark' => '#94a3b8'
        ],
        'border' => [
            'light' => '#f8fafc',
            'dark' => '#111827'
        ],
        'title' => [
            'light' => '#64748b',
            'dark' => '#94a3b8'
        ],
        'labels' => [
            'light' => '#94a3b8',
            'dark' => '#94a3b8'
        ],
    ];

    /**
     * Theme
     *
     * @return string
     */
    static function theme()
    {
        return static::$theme;
    }

    /**
     * Blue colors
     *
     * @return string|array
     */
    static function blue()
    {
        return static::$colors['blue'][static::theme()];
    }

    /**
     * Red colors
     *
     * @return string|array
     */
    static function red()
    {
        return static::$colors['red'][static::theme()];
    }

    /**
     * Green colors
     *
     * @return string|array
     */
    static function green()
    {
        return static::$colors['green'][static::theme()];
    }

    /**
     * Orange colors
     *
     * @return string|array
     */
    static function orange()
    {
        return static::$colors['orange'][static::theme()];
    }

    /**
     * Violet colors
     *
     * @return string|array
     */
    static function violet()
    {
        return static::$colors['violet'][static::theme()];
    }

    /**
     * Yellow colors
     *
     * @return string|array
     */
    static function yellow()
    {
        return static::$colors['yellow'][static::theme()];
    }

    /**
     * Gray colors
     *
     * @return string|array
     */
    static function gray()
    {
        return static::$colors['gray'][static::theme()];
    }

    /**
     * Border color
     *
     * @return string|array
     */
    static function border()
    {
        return static::$colors['border'][static::theme()];
    }

    /**
     * Title color
     *
     * @return string|array
     */
    static function title()
    {
        return static::$colors['title'][static::theme()];
    }

    /**
     * Subtitle color
     *
     * @return string|array
     */
    static function subtitle()
    {
        return static::title();
    }

    /**
     * Labels color
     *
     * @return string|array
     */
    static function labels()
    {
        return static::$colors['labels'][static::theme()];
    }
}