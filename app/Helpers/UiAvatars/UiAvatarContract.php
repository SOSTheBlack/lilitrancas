<?php

namespace App\Helpers\UiAvatars;

/**
 * Interface UiAvatarContract.
 *
 * @package App\Services\UiAvatars
 */
interface UiAvatarContract
{
    /**
     * @const string
     */
    public const BASE_URL = 'https://ui-avatars.com';

    /**
     * @const string
     */
    public const ENDPOINT_GET_BY_NAME = '/api/?name=%s&format=svg';
}
