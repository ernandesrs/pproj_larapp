<?php

namespace App\Enums;

enum PermissionsEnum: string
{
    /**
     * 
     * GENERAL
     */
    case ADMIN_ACCESS = 'admin_access';

    /**
     * 
     * USER
     * 
     */
    case LIST_USERS = 'list_users';
    case SHOW_USERS = 'show_users';
    case CREATE_USERS = 'create_users';
    case EDIT_USERS = 'edit_users';
    case DELETE_USERS = 'delete_users';
    case EDIT_USER_PERMISSIONS = 'edit_user_permissions';

    /**
     * Label
     *
     * @return string
     */
    public function label()
    {
        return match ($this) {
            static::ADMIN_ACCESS => __('admin/phrases.admin_access'),

            static::LIST_USERS => __('admin/phrases.list_users'),
            static::SHOW_USERS => __('admin/phrases.show_users'),
            static::CREATE_USERS => __('admin/phrases.create_users'),
            static::EDIT_USERS => __('admin/phrases.edit_users'),
            static::DELETE_USERS => __('admin/phrases.delete_users'),
            static::EDIT_USER_PERMISSIONS => __('admin/phrases.edit_user_permissions'),
        };
    }
}