<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $created_at
 */
class News extends Model
{
    use HasFactory;

    /**
     * @return News|null
     */
    public function prev(): Model|null
    {
        return News::query()->where('created_at', '<', $this->created_at)->orderByDesc('created_at')->first();
    }

    /**
     * @return News|null
     */
    public function next(): Model|null
    {
        return News::query()->where('created_at', '>', $this->created_at)->orderBy('created_at')->first();
    }
}
