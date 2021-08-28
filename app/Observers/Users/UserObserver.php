<?php

namespace App\Observers\Users;

use App\Models\User;
use App\Observers\Users\Resources\UserCreatedObserver;
use Throwable;

/**
 * Class UserObserver.
 * 
 * @package App\Observers\Users
 */
class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        try {
            $userCreatedObserver = new UserCreatedObserver($user);
            $userCreatedObserver->saveGravatarInProfile();
        } catch (Throwable $exception) {
            app('sentry')->captureException($exception);
        }
    }
}
