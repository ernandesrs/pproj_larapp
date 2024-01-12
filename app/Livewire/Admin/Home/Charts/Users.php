<?php

namespace App\Livewire\Admin\Home\Charts;

use App\Enums\Admin\UserPermissionsEnum;
use App\Livewire\Admin\Builders\Charts\ChartBuilder;
use App\Livewire\Admin\Builders\Charts\Colors;
use App\Livewire\Admin\Builders\Charts\Dataset;
use App\Models\User;
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
                new Dataset('Total', User::count(), Colors::blue()),
                new Dataset('Total', User::permission(UserPermissionsEnum::ADMIN_ACCESS->value)->count(), Colors::green()),
                new Dataset('Total', User::whereNull('email_verified_at')->count(), Colors::red())
            ];
        };
    }
}
