<?php

use Illuminate\Support\Facades\Route;

/**
 * 
 * 
 * FRONT ROUTES
 * 
 * 
 */
Route::group([], function () {

    Route::get('/', function () {
        return view('front.home');
    });

});

/**
 * 
 * 
 * AUTH ROUTES
 * 
 * 
 */
Route::group([
    'prefix' => 'auth'
], function () {

    Route::get('/login', \App\Livewire\Auth\Login::class)->name('auth.login')->middleware(['guest']);
    Route::get('/logout', [\App\Livewire\Auth\Login::class, 'logout'])->name('auth.logout')->middleware(['auth']);
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('auth.register')->middleware(['guest']);
    Route::get('/forget', \App\Livewire\Auth\Forget::class)->name('auth.forget')->middleware(['guest']);

});

/**
 * 
 * 
 * CUSTOMER ROUTES
 * 
 * 
 */
Route::group([
    'prefix' => 'dash',
    'middleware' => 'auth'
], function () {

    Route::get('/', \App\Livewire\Customer\Home::class)->name('customer.index');

    Route::get('/account', \App\Livewire\Customer\Account\Account::class)->name('customer.account');
    Route::get('/settings', \App\Livewire\Customer\Settings\Setting::class)->name('customer.settings');

});

/**
 * 
 * 
 * ADMIN ROUTES
 * 
 * 
 */
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {

    Route::get('/', \App\Livewire\Admin\Home::class)->name('admin.index');

    /*
     * USERS
     */
    Route::group([
        'prefix' => 'users'
    ], function () {

        Route::get('/', \App\Livewire\Admin\Users\Index::class)->name('admin.users');
        Route::get('/create', \App\Livewire\Admin\Users\Create::class)->name('admin.users.create');
        Route::get('/{user}/edit', \App\Livewire\Admin\Users\Edit::class)->name('admin.users.edit');
        Route::get('/{user}/show', \App\Livewire\Admin\Users\Show::class)->name('admin.users.show');

    });

    /*
     * PROFILE
     */
    Route::get('/profile', \App\Livewire\Admin\Account\Profile::class)->name('admin.profile');

    /*
     * EXAMPLES
     */
    Route::group([
        'prefix' => 'examples'
    ], function () {

        

    });

});
