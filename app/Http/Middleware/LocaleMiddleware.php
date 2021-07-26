<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class LocaleMiddleware.
 *
 * @package App\Http\Middleware
 */
class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // available language in template array
        $availLocale = [
            'pt_BR' => 'pt_BR',
        ];

        if (! session()->has('locale')) {
            app()->setLocale(config('app.locale'));
            session()->put('locale', config('app.locale'));
        }

        // Locale is enabled and allowed to be changed
        if (session()->has('locale') && array_key_exists(session()->get('locale'), $availLocale)) {
            // Set the Laravel locale
            app()->setLocale(session()->get('locale'));
        }


        return $next($request);
    }
}
