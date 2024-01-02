<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\PermissionsEnum;
use App\Helpers\Alert;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    /**
     * New role name
     *
     * @var string
     */
    #[Validate(['required', 'unique:roles,name'])]
    public $newRoleName = '';

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
     * Register new role
     *
     * @return void
     */
    public function registerNewRole()
    {
        $this->authorize(PermissionsEnum::CREATE_ROLES->value);

        $validated = $this->validate();
        $newRoleName = \Str::slug($validated['newRoleName'], '_');

        if (Role::where('name', $newRoleName)->count()) {
            $this->addError('newRoleName', __('validation.unique'));
            return;
        }

        $role = Role::create(['name' => $newRoleName]);
        if (!$role) {
            Alert::error(__('messages.alert.register_has_fail'))->float()->addFlash();
            return $this->redirect(route('admin.roles'), true);
        }

        Alert::success(__('messages.alert.register_success'))->float()->addFlash();
        return $this->redirect(route('admin.roles.edit', ['role' => $role->id]), true);
    }
}
