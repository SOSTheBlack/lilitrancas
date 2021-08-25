<?php

namespace App\Http\Controllers\Users;

use App\Helpers\withUser;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserShowController extends UserController
{
    use withUser;

    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $this->shareBreadcrumbs(['name' => $this->user->name]);
        $this->sharePageTitle(__('Perfil ').$this->user->name);

        return view('pages.users.show', ['user' => $this->user]);
    }
}
