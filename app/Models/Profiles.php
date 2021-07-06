<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Profiles
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $bio
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\ProfilesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profiles whereUserId($value)
 * @mixin \Eloquent
 */
class Profiles extends Model
{
    use HasFactory;
}
