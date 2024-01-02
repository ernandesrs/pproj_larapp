<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\PermissionsEnum;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
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
}
