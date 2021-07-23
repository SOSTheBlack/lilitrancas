<?php

namespace App\Helpers;

use App\Exceptions\AppException;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Trait UserAuth
 *
 * @property Authenticatable|User user
 *
 * @package App\Helpers
 */
trait withUser
{
    /**
     * @param  string  $key
     *
     * @return mixed
     *
     * @throws AppException
     */
    public function __get(string $key): mixed
    {
        if ($key === 'user') {
            return $this->user = $this->userAuth();
        }

        return self::__get($key);
    }

    /**
     * @throws AppException
     */
    public function userAuth(): Authenticatable|User
    {
        $auth = auth();

        if ($auth->check()) {
            return $auth->user();
        }

        throw new AppException('user not authenticated.');
    }
}