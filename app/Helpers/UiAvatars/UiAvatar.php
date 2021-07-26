<?php

namespace App\Helpers\UiAvatars;

use Illuminate\Http\Client\Factory as HttpClient;
use Illuminate\Support\Str;

/**
 * Class UiAvatar.
 *
 * @package App\Services\UiAvatars
 */
class UiAvatar extends HttpClient implements UiAvatarContract
{
    /**
     * @param  string  $name
     *
     * @return string
     */
    public static function getUrl(string $name): string
    {
        return vsprintf(self::BASE_URL.self::ENDPOINT_GET_BY_NAME, [Str::slug($name, '+')]);
    }
}