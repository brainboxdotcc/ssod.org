<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static count()
 * @method static sum(string $string)
 */
class GuildCache extends Model
{
    use HasFactory;

    protected $table = 'guild_cache';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'owner_id',
        'name',
    ];

}
