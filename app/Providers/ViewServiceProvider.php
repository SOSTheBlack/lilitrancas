<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Class ViewServiceProvider.
 *
 * @package App\Providers
 */
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @param  Guard  $auth
     *
     * @return void
     */
    public function boot(Guard $auth): void
    {
        View::composer('*', function ($view) use ($auth) {
            $view->with('authUser', $auth->user());
        });
    }
}
