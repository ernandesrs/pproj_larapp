<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Helpers\Charts\ChartBuilder;
use Livewire\Component;

class Users extends Component
{
    use ChartBuilder;

    /**
     * Chart id
     *
     * @var string
     */
    public string $id = 'home_users_chart';

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

        $this->startChart();
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

    /**
     * Undocumented function
     *
     * @return \Closure
     */
    public function chartDatasetAdderCallback()
    {
        return function () {
            return [
                new \App\Helpers\Charts\Dataset('Total', \App\Models\User::count(), '#2E9AFE'),
                new \App\Helpers\Charts\Dataset('Total', \App\Models\User::permission(\App\Enums\Admin\User\App\Enums\Admin\UserPermissionsEnum::ADMIN_ACCESS->value)->count(), '#00DE74'),
                new \App\Helpers\Charts\Dataset('Total', \App\Models\User::whereNull('email_verified_at')->count(), '#FE4100')
            ];
        };
    }
}
