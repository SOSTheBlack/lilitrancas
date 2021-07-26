<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
    Route::get('/')->name('home')->uses('HomeController');
    Route::get('/logout')->name('logout')->uses('Auth\LoginController@logout');

    Route::prefix('settings')->namespace('Settings')->group(function () {
        Route::prefix('enterprises')->namespace('Enterprises')->group(function () {
            Route::get('/new')->name('settings.enterprises.new')->uses('EnterpriseNewController');
            Route::get('/')->name('settings.enterprises.index')->uses('EnterpriseIndexController');
            Route::get('/{enterprise}')->name('settings.enterprises.view')->uses('EnterpriseViewController');
            Route::get('/{enterprise}/edit')->name('settings.enterprises.edit')->uses('EnterpriseEditController');
        });
    });

    Route::prefix('users')->namespace('Users')->group(function () {
        Route::get('/me')->name('users.me')->uses('MeUserController');
        Route::get('/{user}')->name('users.show')->uses('ShowUserController');
    });
});