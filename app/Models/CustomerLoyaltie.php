<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CustomerLoyaltie
 *
 * @property int $id
 * @property int $user_id
 * @property int $enterprise_id
 * @property int $enterprise_catalog_id
 * @property int $confirmed
 * @property string|null $confirmed_at
 * @property string $reserved_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\CustomerLoyaltieFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereEnterpriseCatalogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereEnterpriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereReservedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerLoyaltie whereUserId($value)
 * @mixin \Eloquent
 */
class CustomerLoyaltie extends Model
{
    use HasFactory;
}
