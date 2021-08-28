<?php

namespace App\Models;

use App\Models\Traits\withMediaLinksRelationship;
use Database\Factories\EnterpriseFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Enterprise
 *
 * @property-read Collection|\App\Models\Influencer[] $influencers
 * @property-read int|null $influencers_count
 * @property-read \App\Models\User $owner
 * @property-read Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\EnterpriseFactory factory(...$parameters)
 * @method static Builder|Enterprise newModelQuery()
 * @method static Builder|Enterprise newQuery()
 * @method static Builder|Enterprise query()
 * @mixin Eloquent
 */
class Enterprise extends Model
{
    use HasFactory;

    /**
     * @const array
     */
    public const DOCUMENT_TYPE = [
        'cpf' => 'CPF',
        'cnpj' => 'CNPJ',
    ];

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = ['active' => 'boolean'];

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return HasMany
     */
    public function influencers(): HasMany
    {
        return $this->hasMany(Influencer::class);
    }
}
