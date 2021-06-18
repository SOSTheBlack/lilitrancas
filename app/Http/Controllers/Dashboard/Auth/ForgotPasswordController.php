<?php

namespace App\Http\Controllers\Dashboard\Auth;


use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends AuthController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        $pageConfigs = ['bodyCustomClass' => 'forgot-bg', 'isCustomizer' => false];

        return view('/auth/passwords/email', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}
