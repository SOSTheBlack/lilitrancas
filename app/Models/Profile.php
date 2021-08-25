<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Profile
 *
 * @property int $id
 * @property int $user_id
 * @property string $username
 * @property string|null $bio
 * @property string|null $avatar
 * @property bool $active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|Profile newModelQuery()
 * @method static Builder|Profile newQuery()
 * @method static \Illuminate\Database\Query\Builder|Profile onlyTrashed()
 * @method static Builder|Profile query()
 * @method static Builder|Profile whereActive($value)
 * @method static Builder|Profile whereAvatar($value)
 * @method static Builder|Profile whereBio($value)
 * @method static Builder|Profile whereCreatedAt($value)
 * @method static Builder|Profile whereDeletedAt($value)
 * @method static Builder|Profile whereId($value)
 * @method static Builder|Profile whereUpdatedAt($value)
 * @method static Builder|Profile whereUserId($value)
 * @method static Builder|Profile whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|Profile withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Profile withoutTrashed()
 * @mixin Eloquent
 */
class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = ['active' => 'bool'];
}
