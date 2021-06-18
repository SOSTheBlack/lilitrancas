<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\View\View;

/**
 * Class LoginController.
 *
 * @package App\Http\Controllers\Dashboard\Auth
 */
class LoginController extends AuthController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected string $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return View
     */
    public function showLoginForm(): View
    {
        $pageConfigs = ['bodyCustomClass' => 'login-bg', 'isCustomizer' => false];

        return view('/auth/login', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}
