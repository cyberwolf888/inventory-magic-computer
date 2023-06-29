<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lokasi
 *
 * @property string $id
 * @property string $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lokasi extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
}
