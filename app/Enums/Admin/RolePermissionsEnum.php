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
            static::VIEW_ANY => __('admin/phrases.list_roles'),
            static::VIEW => __('admin/phrases.show_roles'),
            static::CREATE => __('admin/phrases.create_roles'),
            static::UPDATE => __('admin/phrases.edit_roles'),
            static::DELETE => __('admin/phrases.delete_roles'),
            static::FORCE_DELETE => __('admin/phrases.force_delete_roles'),
            static::RESTORE => __('admin/phrases.restore_roles')
        };
    }

    static function toArray()
    {
        return array_map(fn($i) => $i->value, static::cases());
    }
}