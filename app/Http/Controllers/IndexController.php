<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $news = Cache::remember("front_page.news", 3600, fn() => News::query()->orderByDesc("created_at")->limit(3)->get());
        return view("frontpage.index",
            [
                'news' => $news,
                "page_title" => 'Welcome to Cryptillia!',
                "page_meta_desc" => 'The Seven Spells Of Destruction Text-Based Multiplayer RPG',
                "page_image" => '/img/app_encyclopaedia.jpg',
            ]
        );
    }
}