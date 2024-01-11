<?php

namespace App\Enums\Admin;

use App\Enums\BaseEnum;

enum UserPermissionsEnum: string implements BaseEnum
{
    case ADMIN_ACCESS = 'admin_access';

    case VIEW_ANY = 'viewAny_users';

    case VIEW = 'view_users';

    case CREATE = 'create_users';

    case UPDATE = 'update_users';

    case DELETE = 'delete_users';

    case FORCE_DELETE = 'forceDelete_users';

    case RESTORE = 'restore_users';

    case UPDATE_PERMISSIONS = 'editPermissions_users';

    function label()
    {
        return match ($this) {
            static::ADMIN_ACCESS => __('admin/permissions.users.admin_access'),

            static::VIEW_ANY => __('admin/permissions.users.view_any'),
            static::VIEW => __('admin/permissions.users.view'),
            static::CREATE => __('admin/permissions.users.create'),
            static::UPDATE => __('admin/permissions.users.update'),
            static::DELETE => __('admin/permissions.users.delete'),
            static::FORCE_DELETE => __('admin/permissions.users.force_delete'),
            static::RESTORE => __('admin/permissions.users.restore'),

            static::UPDATE_PERMISSIONS => __('admin/permissions.users.update_permissions')
        };
    }

    static function toArray()
    {
        return array_map(fn($i) => $i->value, static::cases());
    }
}