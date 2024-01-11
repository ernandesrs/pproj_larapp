<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use App\Livewire\Traits\IsListPage;
use App\Livewire\Builder\Breadcrumb;
use App\Livewire\Traits\ResponseTrait;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use ResponseTrait, IsListPage;

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(\App\Enums\Admin\RolePermissionsEnum::VIEW_ANY->value);

        return view('livewire..admin.roles.index', [
            'roles' => Role::query()->paginate(15)
        ])->layout('livewire.admin.layout')->title($this->getLayoutTitle());
    }

    /**
     * Delete a role
     *
     * @return void
     */
    public function deleteRole(Role $role)
    {
        $this->authorize(\App\Enums\Admin\RolePermissionsEnum::DELETE->value);

        if (in_array($role->name, [RolesEnum::ADMIN_USER->value, RolesEnum::SUPER_USER->value])) {
            $this->alertDanger(__('admin/messages.alert.delete_protected_fail', ['resource' => 'função']));
            return;
        }

        if ($total = $role->users()->count()) {
            $this->alertDanger(__('admin/phrases.role_has_users', ['total' => $total]));
            return;
        }

        $this->deletionResponse($role->delete(), route('admin.roles'));
    }

    /**
     * 
     * 
     * IsListPage methods
     * 
     * 
     */

    function pageTitle()
    {
        return __('words.roles');
    }

    function pageSubtitle()
    {
        return __('admin/phrases.manage_roles');
    }

    function pageBreadcrumb()
    {
        return (new Breadcrumb)
            ->add(__('words.roles'), ['name' => 'admin.roles']);
    }

    function pageCreateButton()
    {
        return [
            'href' => route('admin.roles.create'),
            'text' => __('words.create') . ' ' . __('words.role'),
            'permission' => \App\Enums\Admin\RolePermissionsEnum::CREATE->value
        ];
    }

    function modelClass()
    {
        return Role::class;
    }

    function listLabels()
    {
        return [
            [
                'label' => __('words.role')
            ],
            [
                'label' => __('words.permissions')
            ]
        ];
    }

    function listShowButton()
    {
        return null;
    }

    function listEditButton()
    {
        return [
            'permission' => \App\Enums\Admin\RolePermissionsEnum::UPDATE->value,
            'href' => route('admin.roles.edit', ['role' => '_id_'])
        ];
    }

    function listDeleteButton()
    {
        return [
            'permission' => \App\Enums\Admin\RolePermissionsEnum::DELETE->value
        ];
    }
}
