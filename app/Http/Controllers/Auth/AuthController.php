<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Providers\RouteServiceProvider;

/**
 * Class AuthController.
 *
 * @package App\Http\Controllers\Auth
 */
abstract class AuthController extends BaseController
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