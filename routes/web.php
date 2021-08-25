<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Phpfastcache\Helper\Psr16Adapter;

Auth::routes(['verify' => true]);

//dd(
//    Socialite::driver('instagram')->redirect()
//);

dd(
$instagram = \SOSTheBlack\Instagram\Instagram::withCredentials(
    'lilitrancas_boxbraids',
    'delfinavidalonga',
    Cache::driver('instagram'),
    new \GuzzleHttp\Client(),
    ),
$instagram->login(),
$instagram->saveSession(),
);

Route::middleware('auth')->group(function () {

    Route::namespace('Dashboard')->group(function () {
        Route::get('/')->name('dashboard.index')->uses('IndexDashboardController');
    });

    Route::get('/logout')->name('logout')->uses('Auth\LoginController@logout');

    Route::prefix('enterprise')->namespace('Enterprises')->group(function () {
        Route::get('/new')->name('enterprise.new')->uses('EnterpriseNewController');
        Route::get('/')->name('enterprise.index')->uses('EnterpriseIndexController');
        Route::get('/me')->name('enterprise.me')->uses('EnterpriseShowController');
        Route::get('/{enterprise}')->name('enterprise.view')->uses('EnterpriseShowController');
        Route::get('/{enterprise}/edit')->name('enterprise.edit')->uses('EnterpriseEditController');
    });

    Route::prefix('user')->namespace('Users')->group(function () {
//        Route::get('/')->name('user.index')->uses('UserIndexController');
        Route::get('/me')->name('user.me')->uses('UserShowController');
        Route::get('/{user}')->name('user.show')->uses('ShowUserController');
    });

    Route::prefix('marketplace')->namespace('Marketplaces')->group(function () {
        Route::get('/')->name('marketplace.index')->uses('MarketplaceIndexController');
    });
});

Route::prefix('/e')->namespace('Enterprises')->group(function () {
    Route::get('/{enterprise:username}')->name('enterprise.show-public')->uses('EnterpriseShowPublicController');
});
