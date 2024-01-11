<?php

namespace App\Livewire\Admin\Users;

use App\Enums\PermissionsEnum;
use App\Livewire\Traits\IsListPage;
use App\Livewire\Builder\Breadcrumb;
use App\Livewire\Traits\ResponseTrait;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    use ResponseTrait, IsListPage;

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(PermissionsEnum::LIST_USERS->value);

        return view('livewire..admin.users.index')
            ->layout('livewire.admin.layout')->title($this->getLayoutTitle());
    }

    /**
     * Delete a user
     *
     * @param int|string $id
     * @return void
     */
    public function delete($id)
    {
        $this->authorize([PermissionsEnum::DELETE_USERS->value]);

        $user = User::where('id', $id)->firstOrFail();

        if ($user->id == \Auth::user()->id) {
            $this->alertError(__('messages.alert.cannot_delete_your_own_account'), true);
            return $this->redirect(route('admin.users'), true);
        }

        $this->deletionResponse(
            $user->delete(),
            route('admin.users')
        );
    }

    /**
     * Page title
     *
     * @return string
     */
    function pageTitle()
    {
        return __('words.users');
    }

    /**
     * Page subtitle
     *
     * @return string
     */
    function pageSubtitle()
    {
        return __('admin/phrases.manage_users');
    }

    /**
     * Page breadcrumb
     *
     * @return Breadcrumb
     */
    function pageBreadcrumb()
    {
        return (new Breadcrumb)
            ->add(__('words.users'), ['name' => 'admin.index']);
    }

    /**
     * List labels
     *
     * @return array
     */
    function listLabels()
    {
        return [
            [
                'label' => __('words.details') . ' ' . strtolower(__('words.user')),
            ],
            [
                'label' => __('words.roles'),
            ]
        ];
    }

    /**
     * Model class
     *
     * @return string
     */
    function modelClass()
    {
        return User::class;
    }
}
