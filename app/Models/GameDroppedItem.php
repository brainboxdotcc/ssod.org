<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class GameDroppedItem extends Model
{
    use HasFactory;

    public function location(): HasOne
    {
        return $this->hasOne(GameDroppedItem::class, "location_id", "location_id");
    }
}
