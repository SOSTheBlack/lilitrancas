<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
    Route::get('/')->name('home')->uses('HomeController');

    Route::prefix('settings')->namespace('Settings')->group(function () {
        Route::prefix('enterprises')->namespace('Enterprises')->group(function () {
            Route::get('/new')->name('enterprises.new')->uses('EnterpriseNewController');
            Route::get('/')->name('enterprises.index')->uses('EnterpriseIndexController');
        });
    });
});