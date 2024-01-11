<?php

namespace App\Livewire\Admin\Users;

use App\Enums\PermissionsEnum;
use App\Livewire\Traits\IsPage;
use App\Livewire\Builder\Breadcrumb;
use App\Livewire\Traits\ResponseTrait;
use App\Services\UserService;
use Livewire\Component;

class Create extends Component
{
    use ResponseTrait, IsPage;

    /**
     * Data
     *
     * @var array
     */
    public $data = [];

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->data = UserService::getCreateDataFields();
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(\App\Enums\Admin\UserPermissionsEnum::CREATE->value);

        return view('livewire..admin.users.create')
            ->layout('livewire.admin.layout')
            ->title($this->getLayoutTitle());
    }

    /**
     * Save a user
     *
     * @return void
     */
    public function save()
    {
        $this->authorize(\App\Enums\Admin\UserPermissionsEnum::CREATE->value);

        $validated = $this->validate();

        $user = UserService::create($validated['data']);

        $this->registrationResponse($user, route('admin.users.edit', ['user' => $user->id]));
    }

    /**
     * Rules
     *
     * @return array
     */
    public function rules()
    {
        return UserService::getCreateDataRules();
    }

    /**
     * Page title
     *
     * @return string
     */
    public function pageTitle()
    {
        return __('words.register') . ' ' . __('words.user');
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
            ->add(__('words.register') . ' ' . __('words.user'), ['name' => 'admin.users.create']);
    }

    /**
     * Data to create button from page header
     *
     * @return null|array
     */
    function pageCreateButton()
    {
        return null;
    }
}
