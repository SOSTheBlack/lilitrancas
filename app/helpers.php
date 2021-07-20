<?php

use App\Exceptions\AppException;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

if (function_exists('user')) {
    /**
     * @return User|Authenticatable|null
     *
     * @throws AppException
     */
    function user(): User|Authenticatable|null
    {
        if (auth()->check()) {
            return auth()->user();
        }

        throw new AppException(__('Usuário não está autenticado.'));
    }
}
