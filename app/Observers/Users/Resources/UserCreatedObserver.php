<?php

namespace App\Observers\Users\Resources;

use App\Helpers\UiAvatars\UiAvatar;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
     */
    public function saveGravatarInProfile(): void
    {
        try {
            $gravatar = app('gravatar');

            $gravatar->exists($this->user->email);

            $avatar = $gravatar->get($this->user->email);
        } catch (Throwable $exception) {
            $avatar = UiAvatar::getUrl($this->user->name);
        } finally {
            $this->user->profile()->updateOrCreate(['user_id' => $this->user->id], ['avatar' => $avatar]);
        }
    }

    /**
     * @return void
     */
    public function givePermissions(): void
    {
        $this->user->assignRole(Role::findByName('influencer'));
    }
}
