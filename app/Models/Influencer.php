<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Influencer
 *
 * @property int $id
 * @property int $user_id
 * @property int $enterprise_id
 * @property string $fantasy_name
 * @property string $link_share
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\InfluencerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereEnterpriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereFantasyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereLinkShare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Influencer whereUserId($value)
 * @mixin \Eloquent
 */
class Influencer extends Model
{
    use HasFactory;
}
