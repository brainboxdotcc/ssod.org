<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findOrFail(int $input)
 */
class GameLocation extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function droppedItems(): HasMany
    {
        return $this->hasMany(GameDroppedItem::class, "location_id", "id");
    }

    public function users(): HasMany
    {
        return $this->hasMany(GameUser::class, "paragraph", "id");
    }

    public function chatEvents(): HasMany
    {
        return $this->hasMany(GameChatEvent::class, "location_id", "id");
    }
}
