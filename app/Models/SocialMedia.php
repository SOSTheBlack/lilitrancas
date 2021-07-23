<?php

namespace App\Models;

use Database\Factories\SocialMediaFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SocialMedia
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\SocialMediaFactory factory(...$parameters)
 * @method static Builder|SocialMedia newModelQuery()
 * @method static Builder|SocialMedia newQuery()
 * @method static Builder|SocialMedia query()
 * @method static Builder|SocialMedia whereCreatedAt($value)
 * @method static Builder|SocialMedia whereDeletedAt($value)
 * @method static Builder|SocialMedia whereDescription($value)
 * @method static Builder|SocialMedia whereId($value)
 * @method static Builder|SocialMedia whereName($value)
 * @method static Builder|SocialMedia whereSlug($value)
 * @method static Builder|SocialMedia whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SocialMedia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];
}
