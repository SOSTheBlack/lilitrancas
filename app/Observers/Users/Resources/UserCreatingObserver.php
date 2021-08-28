<?php

namespace App\Observers\Users\Resources;

use App\Models\User;
use Illuminate\Support\Str;

class UserCreatingObserver
{
    /**
     * @var User
     */
    private User $user;

    /**
     * UserCreatedObserver constructor.
     *
     * @param  User  $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return void
     *
     * @deprecated
     */
    public function setUsername(): void
    {
        if (is_null($this->user->username)) {
            $this->user->username = Str::slug($this->user->name);
        }
    }
}