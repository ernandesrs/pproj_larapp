<?php

namespace App\Livewire\Admin\Users;

use App\Enums\PermissionsEnum;
use App\Livewire\Traits\IsPage;
use App\Livewire\Traits\Models\Breadcrumb;
use App\Livewire\Traits\ResponseTrait;
use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, ResponseTrait, IsPage;

    /**
     * Search
     *
     * @var string
     */
    #[Url(except: '')]
    public $search;

    /**
     * Only admins
     *
     * @var string
     */
    #[Url(except: [0, '0', ''])]
    public $onlyAdms;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->search = '';
        $this->onlyAdms = 0;
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->authorize(PermissionsEnum::LIST_USERS->value);

        return $this->applyFilter();
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
     * Apply filter and render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function applyFilter()
    {
        if (!empty($this->search)) {
            $users = User::search($this->search);
        } else {
            $users = User::query();
        }

        if ($this->onlyAdms) {
            $users = $users->permission(PermissionsEnum::ADMIN_ACCESS->value);
        }

        return view('livewire..admin.users.index', [
            'users' => $users->orderBy('created_at', 'desc')->paginate(15)
        ])->layout('livewire.admin.layout')
            ->title($this->getLayoutTitle());
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
}
