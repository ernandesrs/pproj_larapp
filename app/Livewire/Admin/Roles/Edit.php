<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\Admin\RolePermissionsEnum;
use App\Enums\RolesEnum;
use App\Livewire\Traits\IsPage;
use App\Livewire\Builder\Breadcrumb;
use App\Livewire\Traits\ResponseTrait;
use Livewire\Attributes\Locked;
use Livewire\Component;
use App\Models\Permission;
use App\Models\Role;

class Edit extends Component
{
    use ResponseTrait, IsPage;

    /**
     * Role
     *
     * @var Role
     */
    #[Locked]
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
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(RolePermissionsEnum::UPDATE->value);

        return view('livewire..admin.roles.edit', [
            'role' => $this->role,
            'permissions' => Permission::all()
        ])
            ->layout('livewire.admin.layout')
            ->title($this->getLayoutTitle());
    }

    /**
     * Add or remove a permission from current role
     *
     * @param Permission $permission
     * @return void
     */
    public function addOrRmPermission(Permission $permission)
    {
        $this->authorize(RolePermissionsEnum::UPDATE->value);

        if ($this->role->name === RolesEnum::SUPER_USER->value) {
            $this->alertError(__('admin/messages.alert.unauthorized_action'));
            return;
        }

        if ($this->role->hasPermissionTo($permission)) {
            $this->role->revokePermissionTo($permission);
        } else {
            $this->role->givePermissionTo($permission);
        }
    }

    /**
     * 
     * 
     * IsPage methods
     * 
     * 
     */

    function pageTitle()
    {
        return __('admin/phrases.edit_roles');
    }

    function pageSubtitle()
    {
        return __('admin/phrases.manage_role');
    }

    function pageBreadcrumb()
    {
        return (new Breadcrumb)
            ->add(__('words.roles'), ['name' => 'admin.roles'])
            ->add(__('words.edit'), ['name' => 'admin.roles.edit', 'params' => ['role' => $this->role->id]]);
    }

    /**
     * Data to create button from page header
     *
     * @return array
     */
    function pageCreateButton()
    {
        return [
            'href' => route('admin.roles.create'),
            'text' => __('words.create') . ' ' . __('words.role'),
            'permission' => RolePermissionsEnum::CREATE->value
        ];
    }
}
