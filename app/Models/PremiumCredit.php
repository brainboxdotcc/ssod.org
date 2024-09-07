<?php

namespace App\Models;

use App\Traits\HasCompositeKeyTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PremiumCredit extends Model
{
    public $incrementing = false;
    public $primaryKey = [ "user_id", "subscription_id" ];

    use HasFactory, HasCompositeKeyTrait;

    public function plan(): HasOne
    {
        return $this->hasOne(PremiumPlan::class, 'id', 'plan_id');
    }
}
