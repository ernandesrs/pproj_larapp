<?php

namespace App\Livewire\Admin\Users;

use App\Helpers\Alert;
use App\Services\UserService;
use Livewire\Component;

class Create extends Component
{
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
        $validated = $this->validate();

        $user = UserService::create($validated['data']);

        Alert::success(__('messages.alert.user_registered'))->float()->addFlash();

        $this->redirect(route('admin.users.edit', ['user' => $user->id]));
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
