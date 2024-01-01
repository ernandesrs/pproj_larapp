<?php

namespace App\Enums;

enum RolesEnum: string
{
    /**
     * 
     * ADMIN
     * 
     */
    case SUPER_USER = 'super_user';

    /**
     * Label
     *
     * @return string
     */
    public function label()
    {
        return match ($this) {
            static::SUPER_USER => __('admin/phrases.super_user'),
        };
    }

}