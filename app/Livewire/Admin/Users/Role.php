<?php

namespace App\Livewire\Admin\Users;

use App\Enums\PermissionsEnum;
use App\Helpers\Alert;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role as RoleModel;

class Role extends Component
{
    /**
     * User
     *
     * @var User
     */
    public $user;

    /**
     * Roles
     *
     * @var RoleModel
     */
    public $roles;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->roles = RoleModel::all();
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.users.role');
    }

    /**
     * Add or remove a role from current user
     *
     * @param RoleModel $role
     * @return void
     */
    public function addOrRmRole(RoleModel $role)
    {
        $this->authorize(PermissionsEnum::EDIT_USER_PERMISSIONS);

        if ($this->user->id === \Auth::user()->id) {
            Alert::error(__('admin/messages.alert.unauthorized_action'))->float()->addAlert($this);
            return;
        }

        $this->user->hasRole($role) ? $this->user->removeRole($role) : $this->user->assignRole($role);
    }
}