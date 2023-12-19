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
        return view('front.index');
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
        return view('customer.index');
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
    'prefix' => 'admin'
], function () {

    Route::get('/', \App\Livewire\Admin\Home::class)->name('admin.index');

});

