<?php

namespace App\Livewire\Admin\Users;

use App\Helpers\Alert;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.users.index', [
            'title' => __('words.users'),
            'users' => User::whereNotNull('id')->paginate(10)->withQueryString()
        ])->layout('livewire.admin.layout')
            ->title(__('words.users'));
    }

    /**
     * Delete a user
     *
     * @param int|string $id
     * @return void
     */
    public function delete($id)
    {
        $user = User::where('id', $id)->firstOrFail();

        if ($user->id == \Auth::user()->id) {
            Alert::danger(__('messages.alert.cannot_delete_your_own_account'))->float()->addFlash();
            return $this->redirect(route('admin.users'), true);
        }

        $user->delete();

        Alert::info(__('messages.alert.user_deleted'))->float()->addAlert($this);
    }
}
