<?php

namespace App\Observers\Users\Resources;

use App\Helpers\UiAvatars\UiAvatar;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Throwable;

/**
 * Class UserCreatedObserver
 *
 * @package App\Observers\User\Resources
 */
class UserCreatedObserver
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
     * Create the avatar for new profile.
     *
     * @return void
     *
     * @throws Throwable
     */
    public function saveGravatarInProfile(): void
    {
        try {
            $gravatar = app('gravatar');

            $gravatar->exists($this->user->email);

            $avatarUrl = $gravatar->get($this->user->email);
        } catch (Throwable $exception) {
            $avatarUrl = UiAvatar::getUrl($this->user->name);
        } finally {
            $this->user->profile->saveOrFail(['avatar' => $avatarUrl]);
        }
    }

    /**
     * @return void
     */
    public function givePermissions(): void
    {
        $this->user->assignRole(Role::findByName('influencer'));
    }

    /**
     * @return void
     */
    public function createProfile(): void
    {
        $this->user->profile()->updateOrCreate(['user_id' => $this->user->id], ['username' => Str::slug($this->user->name)]);
    }
}
