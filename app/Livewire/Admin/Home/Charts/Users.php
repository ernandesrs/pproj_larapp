<?php

namespace App\Livewire\Admin\Home\Charts;

use Livewire\Component;

class Users extends Component
{
    /**
     * Title
     *
     * @var string
     */
    public string $title;

    /**
     * Title
     *
     * @var string
     */
    public string $dataSetLabel;

    /**
     * Data
     *
     * @var array
     */
    public array $data;

    /**
     * Mount
     *
     * @return void
     */
    public function mount()
    {
        $this->title = '';
        $this->dataSetLabel = __('words.users');
        $this->data = [
            [
                'label' => __('words.total'),
                'value' => \App\Models\User::count(),
                'color' => '#2E9AFE'
            ],
            [
                'label' => __('words.administrators'),
                'value' => \App\Models\User::permission(\App\Enums\PermissionsEnum::ADMIN_ACCESS->value)->count(),
                'color' => '#00DE74'
            ],
            [
                'label' => __('words.unverifieds'),
                'value' => \App\Models\User::whereNull('email_verified_at')->count(),
                'color' => '#FE4100'
            ]
        ];
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
