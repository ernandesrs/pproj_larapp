<?php

namespace App\Livewire\Admin\Users;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use App\Livewire\Traits\IsPage;
use App\Livewire\Builder\Breadcrumb;
use App\Livewire\Traits\ResponseTrait;
use App\Models\User;
use App\Services\UserService;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Edit extends Component
{
    use ResponseTrait, IsPage;

    /**
     * User
     *
     * @var User
     */
    #[Locked]
    public $user;

    /**
     * Data
     *
     * @var array
     */
    public $data = [];

    /**
     * Mount component
     *
     * @param User $user
     * @return void
     */
    public function mount(User $user)
    {
        $this->user = $user;
        $this->data = $this->user->toArray();
    }

    /**
     * Render edit view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(PermissionsEnum::EDIT_USERS->value);

        return view('livewire..admin.users.edit', [
            'user' => $this->user
        ])->layout('livewire.admin.layout')->title($this->getLayoutTitle());
    }

    /**
     * Update user
     *
     * @return void
     */
    public function update()
    {
        $this->authorize(PermissionsEnum::EDIT_USERS->value);

        $validated = $this->validate(UserService::getBasicDataRules());

        $this->editingResponse(
            UserService::update($this->user, $validated['data'])
        );
    }

    /**
     * Password update
     *
     * @return void
     */
    public function updatePassword()
    {
        $this->authorize(PermissionsEnum::EDIT_USERS->value);

        $validated = $this->validate(UserService::getPasswordDataRules());

        $this->editingResponse(
            UserService::update($this->user, $validated['data']),
            route('admin.users.edit', ['user' => $this->user->id]),
            null
        );
    }

    /**
     * Delete photo
     *
     * @return void
     */
    public function deletePhoto()
    {
        $this->authorize(PermissionsEnum::EDIT_USERS->value);

        $this->deletionResponse(
            UserService::deletePhoto($this->user),
            route('admin.users.edit', ['user' => $this->user->id])
        );
    }

    /**
     * Authorize
     *
     * @param mixed $ability
     * @param array $arguments
     * @return \Illuminate\Auth\Access\Response
     */
    public function authorize($ability, $arguments = [])
    {
        if (!\Auth::user()->hasRole(RolesEnum::SUPER_USER) && ($this->user->hasRole(RolesEnum::SUPER_USER) || $this->user->hasPermissionTo(PermissionsEnum::ADMIN_ACCESS))) {
            abort(403);
        }

        return parent::authorize($ability, $arguments);
    }

    /**
     * Page title
     *
     * @return string
     */
    public function pageTitle()
    {
        return __('words.edit') . ' ' . __('words.user');
    }

    /**
     * Page subtitle
     *
     * @return string
     */
    public function pageSubtitle()
    {
        return __('admin/phrases.manage_user');
    }

    /**
     * Page breadcrumb
     *
     * @return Breadcrumb
     */
    public function pageBreadcrumb()
    {
        return (new Breadcrumb())
            ->add(__('words.users'), ['name' => 'admin.users'])
            ->add(__('words.edit') . ' ' . __('words.user'), ['name' => 'admin.users.create', 'params' => ['user' => $this->user->id]]);
    }

    /**
     * Data to create button from page header
     *
     * @return array
     */
    function pageCreateButton()
    {
        return [
            'href' => route('admin.users.create'),
            'text' => __('words.create') . ' ' . __('words.user'),
            'permission' => PermissionsEnum::CREATE_USERS->value
        ];
    }
}
