<?php

namespace App\Http\Controllers\Themes\Auth;

use App\Http\Controllers\Themes\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
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
