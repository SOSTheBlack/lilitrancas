<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\Users\ShowUserRequest;
use App\Models\User;

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
     * @param  ShowUserRequest  $request
     */
    public function __invoke(User $user, ShowUserRequest $request)
    {
        return response()->json($user);
    }
}
