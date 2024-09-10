<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogPageController extends Controller
{
    public function blogPage(Request $request): View
    {
        $url = preg_replace("#^/#", "", $request->getPathInfo());
        /** @var News $post */
        $post = News::query()->where("url", "=", $url)->first();
        return view("content.blog", ["post" => $post, "prev" => $post->prev(), "next" => $post->next()]);
    }

    public function nonBlogPage(Request $request): View
    {
        $url = preg_replace("#^/#", "", $request->getPathInfo());
        /** @var Page $post */
        $post = Page::query()->where("url", "=", $url)->first();
        $headings = [];

        if (preg_match_all('/<h2(.+?)<\/h2>/mis', $post->content, $headings)) {
            array_walk_recursive($headings[0], function(string &$heading) {
                $heading = strip_tags($heading);
            });
            $headings = $headings[0];
            $post->content = preg_replace_callback('/<h2>.+?<\/h2>/', function($match) {
                $slug = Str::kebab(strip_tags($match[0]));
                return '<h2 class="wp-block-heading"><span class="ez-toc-section" id="' . htmlentities($slug) . '"></span>' .
                    strip_tags($match[0]) .'<span class="ez-toc-section-end"></span></h2>';
            }, $post->content);
        }
        if (is_array($headings) && is_array($headings[0]) && count($headings[0]) === 0) {
            /* No matches */
            $headings = null;
        }

        $children = $post->children()->with("children");
        return view("content.page", [
            "post" => $post,
            "parent" => $post->parent,
            "children" => $children,
            "headings" => $headings
        ]);
    }

}