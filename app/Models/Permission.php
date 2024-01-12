<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    use HasFactory;

    /**
     * Get allowed permissions
     *
     * @return array
     */
    public static function alloweds(bool $merge = false)
    {
        $registerAlloweds = [
            \App\Enums\Admin\UserPermissionsEnum::cases(),
            \App\Enums\Admin\RolePermissionsEnum::cases()
        ];

        if ($merge) {
            $merged = [];

            array_map(function ($per) use (&$merged) {
                $merged = array_merge($merged, $per);
            }, $registerAlloweds);

            return $merged;
        }

        return $registerAlloweds;
    }

    /**
     * Get permission name label
     *
     * @return string
     */
    public function label()
    {
        $finded = current(array_filter(\App\Models\Permission::alloweds(true), fn($allowed) => $allowed->value == $this->name));
        return $finded ? $finded->label() : $this->name;
    }
}
