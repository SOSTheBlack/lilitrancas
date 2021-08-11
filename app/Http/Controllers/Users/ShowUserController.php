<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\Users\ShowUserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;

/**
 * Class ShowUserController.
 *
 * @package App\Http\Controllers\Users
 */
class ShowUserController extends UserController
{
    /**
     * Handle the incoming request.
     *
     * @param  User  $user
     * @param  ShowUserRequest  $request
     * @return View
     */
    public function __invoke(User $user, ShowUserRequest $request): View
    {
        $this->sharePageTitle($user->short_name);
        $this->shareBreadcrumbs(['name' => $user->short_name]);

        return view('pages.users.show');
    }
}
