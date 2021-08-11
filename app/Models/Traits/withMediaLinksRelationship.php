<?php

namespace App\Models\Traits;

use App\Models\SocialMediaLink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin Model
 */
trait withMediaLinksRelationship
{
    /**
     * Define a one-to-many relationship.
     *
     * @return HasMany
     */
    public function links(): HasMany
    {
        return $this->hasMany(SocialMediaLink::class, 'ref_id')->whereModel(static::class);
    }
}