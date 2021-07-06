<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Enterprise
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $logo
 * @property string $description
 * @property string $link_redirect
 * @property string $document_type
 * @property int $document_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\EnterpriseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereDocumentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereDocumentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereLinkRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enterprise whereUserId($value)
 * @mixin \Eloquent
 */
class Enterprise extends Model
{
    use HasFactory;

    public const DOCUMENT_TYPE = [
        'cpf' => 'CPF',
        'cnpj' => 'CNPJ',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
