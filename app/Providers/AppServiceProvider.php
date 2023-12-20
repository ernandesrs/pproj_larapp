<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Component;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * 
         * Send notification from server to frontend
         * 
         */
        Component::macro('server_notifying', function ($alert) {
            // $this will refer to the component class
            // not to the AppServiceProvider
            $this->dispatch('server_notifying', $alert);
        });
    }
}
