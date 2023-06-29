<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rak
 *
 * @property string $id
 * @property string $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Rak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rak query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rak whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rak whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rak whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rak whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Rak extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
}
