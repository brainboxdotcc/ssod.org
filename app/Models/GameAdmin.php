<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

/**
 * @method static find(int $id)
 */
class GameAdmin extends Model
{
    use HasFactory;

    public $incrementing = false;

    public $primaryKey = [ "user_id" ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public static function check(?User $user = null): bool
    {
        if (!$user) {
            $user = Auth::user();
        }
        return self::query()->where("user_id", "=", $user->id)->count();
    }
}
