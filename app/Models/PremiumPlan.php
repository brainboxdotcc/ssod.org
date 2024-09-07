<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static count()
 */
class PremiumPlan extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        "id",
        "name",
        "price",
        "period",
        "period_unit",
        "currency",
        "quota",
        "description",
    ];
}
