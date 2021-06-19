<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

/**
 * Class AuthController.
 *
 * @package App\Http\Controllers\Auth
 */
abstract class AuthController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @return string
     */
    protected function redirectTo(): string
    {
        return route(RouteServiceProvider::HOME);
    }
}