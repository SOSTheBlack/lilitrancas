<?php

namespace App\Models;

use Database\Factories\SocialMediaLinkFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\SocialMediaLink
 *
 * @property int $id
 * @property int $social_media_id
 * @property int $ref_id
 * @property string $model
 * @property string $link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\SocialMedia $socialMedia
 * @method static \Database\Factories\SocialMediaLinkFactory factory(...$parameters)
 * @method static Builder|SocialMediaLink newModelQuery()
 * @method static Builder|SocialMediaLink newQuery()
 * @method static Builder|SocialMediaLink query()
 * @method static Builder|SocialMediaLink whereCreatedAt($value)
 * @method static Builder|SocialMediaLink whereDeletedAt($value)
 * @method static Builder|SocialMediaLink whereId($value)
 * @method static Builder|SocialMediaLink whereLink($value)
 * @method static Builder|SocialMediaLink whereModel($value)
 * @method static Builder|SocialMediaLink whereRefId($value)
 * @method static Builder|SocialMediaLink whereSocialMediaId($value)
 * @method static Builder|SocialMediaLink whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SocialMediaLink extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['social_media_id', 'ref_id', 'model', 'link'];

    /**
     * @return BelongsTo
     */
    public function socialMedia(): BelongsTo
    {
        return $this->belongsTo(SocialMedia::class);
    }
}
