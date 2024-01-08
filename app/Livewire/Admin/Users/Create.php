<?php

namespace App\Livewire\Admin\Users;

use App\Enums\PermissionsEnum;
use App\Livewire\Traits\ResponseTrait;
use App\Services\UserService;
use Livewire\Component;

class Create extends Component
{
    use ResponseTrait;

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
        $this->authorize(PermissionsEnum::CREATE_USERS->value);

        return view('livewire..admin.users.create', [
            'title' => __('words.register') . ' ' . __('words.user')
        ])->layout('livewire.admin.layout')->title(__('words.register') . ' ' . __('words.user'));
    }

    /**
     * Register a user
     *
     * @return void
     */
    public function register()
    {
        $this->authorize(PermissionsEnum::CREATE_USERS->value);

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
}
