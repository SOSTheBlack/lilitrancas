<?php

namespace App\Models;

use Database\Factories\UserEnterpriseFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserEnterprise
 *
 * @property int $user_id
 * @property int $enterprise_id
 * @method static \Database\Factories\UserEnterpriseFactory factory(...$parameters)
 * @method static Builder|UserEnterprise newModelQuery()
 * @method static Builder|UserEnterprise newQuery()
 * @method static Builder|UserEnterprise query()
 * @method static Builder|UserEnterprise whereEnterpriseId($value)
 * @method static Builder|UserEnterprise whereUserId($value)
 * @mixin Eloquent
 */
class UserEnterprise extends Model
{
    use HasFactory;
}
