<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    /**
     * Role
     *
     * @var Role
     */
    public $role;

    /**
     * Data
     *
     * @var array
     */
    public $data;

    /**
     * Mount
     *
     * @param Role $role
     * @return void
     */
    public function mount(Role $role)
    {
        $this->role = $role;
        $this->data = $this->role->toArray();
        $this->data['display_name'] = (RolesEnum::tryFrom($this->role->name)?->label() ?? $this->role->name) . '(' . $this->role->name . ')';
    }

    /**
     * Add or remove a permission from current role
     *
     * @param Permission $permission
     * @return void
     */
    public function addOrRmPermission(Permission $permission)
    {
        $this->authorize(PermissionsEnum::EDIT_ROLES);

        if ($this->role->hasPermissionTo($permission)) {
            $this->role->revokePermissionTo($permission);
        } else {
            $this->role->givePermissionTo($permission);
        }
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(PermissionsEnum::EDIT_ROLES);

        return view('livewire..admin.roles.edit', [
            'role' => $this->role,
            'permissions' => Permission::all()
        ])
            ->layout('livewire.admin.layout')
            ->title(__('admin/phrases.manage_role'));
    }
}
