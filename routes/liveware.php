<?php

use App\Http\Livewire\Dashboard\IndexDashboard;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/')->name('dashboard.index')->uses(IndexDashboard::class);
});