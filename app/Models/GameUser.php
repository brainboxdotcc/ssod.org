<?php

namespace App\Models;

use App\Enums\PlayerProfessionEnum;
use App\Enums\PlayerRaceEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class GameUser extends Model
{
    use HasFactory;

    public $incrementing = false;

    public $timestamps = false;

    public $primaryKey = "user_id";
    protected $keyType = 'string';

    protected $casts = [
        "user_id" => "string",
        "race" => PlayerRaceEnum::class,
        "profession" => PlayerProfessionEnum::class,
    ];

    public function defaults(): HasOne
    {
        return $this->hasOne(GameDefaultUser::class, "user_id", "user_id");
    }

    public function ownedItems(): HasMany
    {
        return $this->hasMany(GameOwnedItem::class, "user_id", "user_id");
    }

}
