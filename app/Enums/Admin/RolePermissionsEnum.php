<?php

namespace App\Enums\Admin;

use App\Enums\BaseEnum;

enum RolePermissionsEnum: string implements BaseEnum
{
    case VIEW_ANY = 'viewAny_roles';

    case VIEW = 'view_roles';

    case CREATE = 'create_roles';

    case UPDATE = 'update_roles';

    case DELETE = 'delete_roles';

    case FORCE_DELETE = 'forceDelete_roles';

    case RESTORE = 'restore_roles';

    function label()
    {
        return match ($this) {
            static::VIEW_ANY => __('admin/permissions.roles.view_any'),
            static::VIEW => __('admin/permissions.roles.view'),
            static::CREATE => __('admin/permissions.roles.create'),
            static::UPDATE => __('admin/permissions.roles.update'),
            static::DELETE => __('admin/permissions.roles.delete'),
            static::FORCE_DELETE => __('admin/permissions.roles.force_delete'),
            static::RESTORE => __('admin/permissions.roles.restore')
        };
    }

    static function toArray()
    {
        return array_map(fn($i) => $i->value, static::cases());
    }
}