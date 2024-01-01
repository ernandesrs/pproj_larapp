<?php

namespace App\Enums;

enum PermissionsEnum: string
{
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
    case PROMOTE_USERS = 'promote_users';
    case DEMOTE_USERS = 'demote_users';

    /**
     * Label
     *
     * @return string
     */
    public function label()
    {
        return match ($this) {
            static::LIST_USERS => __('admin/phrases.list_users'),
            static::SHOW_USERS => __('admin/phrases.show_users'),
            static::CREATE_USERS => __('admin/phrases.create_users'),
            static::EDIT_USERS => __('admin/phrases.edit_users'),
            static::DELETE_USERS => __('admin/phrases.delete_users'),
            static::PROMOTE_USERS => __('admin/phrases.promote_users'),
            static::DEMOTE_USERS => __('admin/phrases.demote_users'),
        };
    }
}