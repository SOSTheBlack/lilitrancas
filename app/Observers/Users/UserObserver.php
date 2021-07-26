<?php

namespace App\Observers\Users;

use App\Models\User;
use App\Observers\User\Resources\UserCreatedObserver;
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

    /**
     * Handle the User "updated" event.
     *
     * @param  User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
