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

    Route::get('/login', \App\Livewire\Auth\Login::class)->name('auth.login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('auth.register');

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
    });

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

    Route::get('/', function () {
        return view('admin.index');
    });

});

