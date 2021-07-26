<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;;

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
    Route::get('/')->name('home')->uses('HomeController');
    Route::get('/logout')->name('logout')->uses('Auth\LoginController@logout');

    Route::prefix('enterprise')->namespace('Enterprises')->group(function () {
        Route::get('/new')->name('enterprise.new')->uses('EnterpriseNewController');
        Route::get('/')->name('enterprise.index')->uses('EnterpriseIndexController');
        Route::get('/{enterprise}')->name('enterprise.view')->uses('EnterpriseViewController');
        Route::get('/{enterprise}/edit')->name('enterprise.edit')->uses('EnterpriseEditController');
    });

    Route::prefix('user')->namespace('Users')->group(function () {
        Route::get('/me')->name('user.me')->uses('MeUserController');
        Route::get('/{user}')->name('user.show')->uses('ShowUserController');
    });

    Route::prefix('marketplace')->namespace('Marketplaces')->group(function () {
        Route::get('/')->name('marketplace.index')->uses('MarketplaceIndexController');
    });
});