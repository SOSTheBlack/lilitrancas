<?php

namespace App\Models;

use Database\Factories\IntegrationFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Integration
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property mixed|null $settings
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\IntegrationAccount[] $accounts
 * @property-read int|null $accounts_count
 * @method static \Database\Factories\IntegrationFactory factory(...$parameters)
 * @method static Builder|Integration newModelQuery()
 * @method static Builder|Integration newQuery()
 * @method static \Illuminate\Database\Query\Builder|Integration onlyTrashed()
 * @method static Builder|Integration query()
 * @method static Builder|Integration whereCreatedAt($value)
 * @method static Builder|Integration whereDeletedAt($value)
 * @method static Builder|Integration whereDescription($value)
 * @method static Builder|Integration whereId($value)
 * @method static Builder|Integration whereName($value)
 * @method static Builder|Integration whereSettings($value)
 * @method static Builder|Integration whereSlug($value)
 * @method static Builder|Integration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Integration withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Integration withoutTrashed()
 * @mixin Eloquent
 */
class Integration extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @const array[string]
     */
    public const SOCIAL_MEDIA = [
        'Instagram',
        'Facebook',
        'Twitter',
        'Youtube',
        'TikTok',
        'WhatsApp',
        'Outro'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'slug', 'description', 'settings'];

    /**
     * Define a many-to-many relationship.
     *
     * @return BelongsToMany
     */
    public function accounts(): BelongsToMany
    {
        return $this->belongsToMany(IntegrationAccount::class);
    }
}
