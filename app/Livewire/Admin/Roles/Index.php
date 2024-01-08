<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use App\Livewire\Traits\ResponseTrait;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use ResponseTrait;

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(PermissionsEnum::LIST_ROLES->value);

        return view('livewire..admin.roles.index', [
            'roles' => Role::query()->paginate(15)
        ])->layout('livewire.admin.layout')
            ->title(__('words.roles'));
    }

    /**
     * Delete a role
     *
     * @return void
     */
    public function deleteRole(Role $role)
    {
        $this->authorize(PermissionsEnum::DELETE_ROLES->value);

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
}
