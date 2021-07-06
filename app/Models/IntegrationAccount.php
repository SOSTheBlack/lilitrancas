<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\IntegrationAccount
 *
 * @property int $id
 * @property int $integration_id
 * @property string $ref_type
 * @property int $ref_id
 * @property string $name
 * @property int $active
 * @property mixed|null $settings
 * @property string $resynced_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\IntegrationAccountFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereIntegrationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereRefId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereRefType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereResyncedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IntegrationAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class IntegrationAccount extends Model
{
    use HasFactory;
}
