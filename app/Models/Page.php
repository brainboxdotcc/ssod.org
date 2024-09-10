<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @property Page|null $parent
 * @property mixed $title
 * @property mixed $url
 * @property BelongsTo|null $children
 * @property mixed $content
 */
class Page extends Model
{
    use HasFactory;

    public function children(): HasMany
    {
        return $this->hasMany(Page::class, "parent_id", "id")->orderBy("created_at");
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Page::class, "parent_id", "id");
    }

    public function breadcrumbs(): array
    {
        $crumbs = [];
        $current = $this;
        do {
            $crumbs[] = [
                "title" => $current->title,
                "id" => $current->getKey(),
                "url" => "/" . $current->url . "/",
            ];
            $current = $current->parent;
        } while ($current);
        $crumbs[] = [
            "title" => "Home",
            "id" => null,
            "url" => "/",
        ];
        return array_reverse($crumbs);
    }
}
