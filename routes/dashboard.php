<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
   Route::get('/')->name('home')->uses('HomeController');
});
