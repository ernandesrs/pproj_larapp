<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\PermissionsEnum;
use App\Helpers\Alert;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    /**
     * New role name
     *
     * @var string
     */
    #[Validate(['required', 'unique:roles,name', 'min:12'])]
    public $roleName = '';

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.roles.create');
    }

    /**
     * Register new role
     *
     * @return void
     */
    public function register()
    {
        $this->authorize(PermissionsEnum::CREATE_ROLES->value);

        $validated = $this->validate();
        $roleName = \Str::slug($validated['roleName'], '_');

        if (Role::where('name', $roleName)->count()) {
            $this->addError('roleName', __('validation.unique'));
            return;
        }

        $role = Role::create(['name' => $roleName]);
        if (!$role) {
            Alert::error(__('messages.alert.register_has_fail'))->float()->addFlash();
            return $this->redirect(route('admin.roles'), true);
        }

        Alert::success(__('messages.alert.register_success'))->float()->addFlash();
        return $this->redirect(route('admin.roles.edit', ['role' => $role->id]), true);
    }
}
