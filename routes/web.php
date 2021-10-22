<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Phpfastcache\Helper\Psr16Adapter;

Auth::routes(['verify' => true]);

//dd(\App\Models\User::factory()->create());

//dd(
//    Socialite::driver('instagram')->redirect()
//);

//dd(
//$instagram = \SOSTheBlack\Instagram\Instagram::withCredentials(
//    'lilitrancas_boxbraids',
//    'delfinavidalonga',
//    Cache::driver('instagram'),
//    new \GuzzleHttp\Client(),
//    ),
//$instagram->login(),
//$instagram->saveSession(),
//);

Route::middleware('auth')->group(function () {

//    Route::namespace('Dashboard')->group(function () {
//        Route::get('/')->name('dashboard.index')->uses(\App\Http\Livewire\Dashboard\IndexDashboard::class);
//    });

    Route::get('/logout')->name('logout')->uses('Auth\LoginController@logout');

    Route::prefix('enterprises')->namespace('Enterprises')->group(function () {
        Route::get('/new')->name('enterprises.new')->uses('EnterpriseNewController');
        Route::get('/')->name('enterprises.index')->uses('EnterpriseIndexController');
        Route::get('/me')->name('enterprises.me')->uses('EnterpriseShowController');
        Route::get('/{enterprises}')->name('enterprises.view')->uses('EnterpriseShowController');
        Route::get('/{enterprises}/edit')->name('enterprises.edit')->uses('EnterpriseEditController');
    });

    Route::prefix('users')->namespace('Users')->group(function () {
//        Route::get('/')->name('users.index')->uses('UserIndexController');
        Route::get('/me')->name('users.me')->uses('UserShowController');
        Route::get('/{user}')->name('users.show')->uses('ShowUserController');
    });

    Route::prefix('marketplaces')->namespace('Marketplaces')->group(function () {
        Route::get('/')->name('marketplaces.index')->uses('MarketplaceIndexController');
    });
});

Route::prefix('/e')->namespace('Enterprises')->group(function () {
    Route::get('/{enterprise:username}')->name('enterprises.show-public')->uses('EnterpriseShowPublicController');
});
