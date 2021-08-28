<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EnterpriseCatalog
 *
 * @property int $id
 * @property int $enterprise_id
 * @property string $name
 * @property string|null $description
 * @property float|null $price
 * @property int $active
 * @property string $started_at
 * @property string|null $ended_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\EnterpriseCatalogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog query()
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereEnterpriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EnterpriseCatalog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EnterpriseCatalog extends Model
{
    use HasFactory;
}
