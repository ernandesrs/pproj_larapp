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
            static::ADMIN_ACCESS => __('admin/phrases.admin_access'),

            static::VIEW_ANY => __('admin/phrases.list_users'),
            static::VIEW => __('admin/phrases.show_users'),
            static::CREATE => __('admin/phrases.create_users'),
            static::UPDATE => __('admin/phrases.edit_users'),
            static::DELETE => __('admin/phrases.delete_users'),
            static::FORCE_DELETE => __('admin/phrases.force_delete_users'),
            static::RESTORE => __('admin/phrases.restore_users'),

            static::UPDATE_PERMISSIONS => __('admin/phrases.edit_user_permissions')
        };
    }

    static function toArray()
    {
        return array_map(fn($i) => $i->value, static::cases());
    }
}