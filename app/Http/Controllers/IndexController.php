<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $news = News::query()->orderByDesc("created_at")->limit(3)->get();
        return view("frontpage.index", ['news' => $news]);
    }
}