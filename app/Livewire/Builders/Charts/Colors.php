<?php

namespace App\Livewire\Builders\Charts;

class Colors
{
    /**
     * Blue colors
     *
     * @return string|array
     */
    static function blue()
    {
        return '#38bdf8';
    }

    /**
     * Red colors
     *
     * @return string|array
     */
    static function red()
    {
        return '#fb7185';
    }

    /**
     * Green colors
     *
     * @return string|array
     */
    static function green()
    {
        return '#34d399';
    }

    /**
     * Orange colors
     *
     * @return string|array
     */
    static function orange()
    {
        return '#fb923c';
    }

    /**
     * Violet colors
     *
     * @return string|array
     */
    static function violet()
    {
        return '#818cf8';
    }

    /**
     * Yellow colors
     *
     * @return string|array
     */
    static function yellow()
    {
        return '#fde047';
    }

    /**
     * Gray colors
     *
     * @return string|array
     */
    static function gray()
    {
        return '#94a3b8';
    }

    /**
     * Border color
     *
     * @return string|array
     */
    static function border()
    {
        $dark = '#111827';
        $light = '#f8fafc';
        return $light;
    }
}