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
    'prefix' => 'dash'
], function () {

    Route::get('/', function () {
        return view('livewire.customer.home');
    })->name('customer.index');

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

        Route::get('/buttons', \App\Livewire\Admin\Examples\Buttons::class)->name('admin.examples.buttons');
        Route::get('/alerts', \App\Livewire\Admin\Examples\Alerts::class)->name('admin.examples.alerts');
        Route::get('/sections', \App\Livewire\Admin\Examples\Sections::class)->name('admin.examples.sections');
        Route::get('/others', \App\Livewire\Admin\Examples\Others::class)->name('admin.examples.others');

    });

});
