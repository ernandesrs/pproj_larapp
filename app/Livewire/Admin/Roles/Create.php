<?php

namespace App\Livewire\Admin\Roles;

use App\Enums\PermissionsEnum;
use App\Livewire\Builder\Breadcrumb;
use App\Livewire\Traits\IsPage;
use App\Livewire\Traits\ResponseTrait;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    use ResponseTrait, IsPage;

    /**
     * Data
     *
     * @var array
     */
    public $data;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->data = [
            'name' => null
        ];
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.roles.create')
            ->layout('livewire.admin.layout')->title($this->getLayoutTitle());
    }

    /**
     * save new role
     *
     * @return void
     */
    public function save()
    {
        $this->authorize(\App\Enums\Admin\RolePermissionsEnum::CREATE->value);

        $validated = $this->validate([
            'data.name' => ['required', 'unique:roles,name']
        ]);

        $name = \Str::slug($validated['data']['name'], '_');

        if (Role::where('name', $name)->count()) {
            $this->addError('data.name', __('validation.unique'));
            return;
        }

        $role = Role::create(['name' => $name]);

        $this->registrationResponse(
            $role,
            route('admin.roles.edit', ['role' => $role->id]),
            route('admin.roles')
        );
    }

    /**
     * 
     * 
     * IsPage method
     * 
     * 
     */
    function pageTitle()
    {
        return __('words.register') . ' ' . __('words.role');
    }

    function pageSubtitle()
    {
        return __('admin/phrases.create_roles');
    }

    function pageBreadcrumb()
    {
        return (new Breadcrumb)
            ->add(__('words.roles'), ['name' => 'admin.roles'])
            ->add(__('words.register') . ' ' . __('words.role'), ['name' => 'admin.roles']);
    }

    function pageCreateButton()
    {
        return null;
    }
}
