<?php

namespace App\Livewire\Admin\Builders\Charts;

class Colors
{
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
     * Blue colors
     *
     * @return string|array
     */
    static function blue()
    {
        return 'blue';
    }

    /**
     * Red colors
     *
     * @return string|array
     */
    static function red()
    {
        return 'red';
    }

    /**
     * Green colors
     *
     * @return string|array
     */
    static function green()
    {
        return 'green';
    }

    /**
     * Orange colors
     *
     * @return string|array
     */
    static function orange()
    {
        return 'orange';
    }

    /**
     * Violet colors
     *
     * @return string|array
     */
    static function violet()
    {
        return 'violet';
    }

    /**
     * Yellow colors
     *
     * @return string|array
     */
    static function yellow()
    {
        return 'yellow';
    }

    /**
     * Gray colors
     *
     * @return string|array
     */
    static function gray()
    {
        return 'gray';
    }

    /**
     * Border color
     *
     * @return string|array
     */
    static function border()
    {
        return 'border';
    }

    /**
     * Title color
     *
     * @return string|array
     */
    static function title()
    {
        return 'title';
    }

    /**
     * Subtitle color
     *
     * @return string|array
     */
    static function subtitle()
    {
        return 'title';
    }

    /**
     * Labels color
     *
     * @return string|array
     */
    static function labels()
    {
        return 'labels';
    }
}