<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Livewire\TraitChart;
use Livewire\Component;

class Users extends Component
{
    use TraitChart;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->typePie();
        $this->addTitles(__('words.users'));

        $this->addLabels([
            __('words.total'),
            __('words.administrators'),
            __('words.unverifieds')
        ]);

        $this->addDataset('Total', \App\Models\User::count(), '#2E9AFE');
        $this->addDataset('Total', \App\Models\User::permission(\App\Enums\PermissionsEnum::ADMIN_ACCESS->value)->count(), '#00DE74');
        $this->addDataset('Total', \App\Models\User::whereNull('email_verified_at')->count(), '#FE4100');
    }

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire..admin.home.charts.users');
    }
}
