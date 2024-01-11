<?php

namespace App\Enums;

interface BaseEnum
{
    /**
     * Label
     *
     * @return string
     */
    public function label();

    /**
     * To array
     *
     * @return array
     */
    public static function toArray();
}