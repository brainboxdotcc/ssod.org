<?php

use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\ErrorTracingController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SitemapController;
use App\Models\News;
use App\Models\Page;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/',[IndexController::class, 'index']);
Route::get('/frequently-asked-questions',[ContentPageController::class, 'frequentlyAskedQuestions']);
Route::get('/discord-bot-commands',[ContentPageController::class, 'botCommands']);
Route::get('/blog', [BlogPageController::class, 'blogIndex']);

Route::get('/sitemap.xml', [SitemapController::class, 'siteMap']);
Route::get('/sitemap-author.xml', [SitemapController::class, 'siteMap']);
Route::get('/sitemap-custom.xml', [SitemapController::class, 'siteMap']);
Route::get('/sitemap-news.xml', [SitemapController::class, 'siteMap']);
Route::get('/sitemap-posttype-page.xml', [SitemapController::class, 'siteMap']);
Route::get('/sitemap-posttype-post.xml', [SitemapController::class, 'siteMap']);
Route::get('/sitemap-root.xml', [SitemapController::class, 'siteMap']);

Route::post('/error-tracing', [ErrorTracingController::class, 'sentryProxy']);

/**
 * Data driven pages from news and pages tables
 */
try {
    $blogPages = News::query()->select("url")->get();
    foreach ($blogPages as $blogPage) {
        Route::get('/' . $blogPage->url, [BlogPageController::class, 'blogPage']);
    }

    $pages = Page::query()->select("url")->get();
    foreach ($pages as $page) {
        Route::get('/' . $page->url, [BlogPageController::class, 'nonBlogPage']);
    }
}
catch (QueryException $tableNotFound) {
    /* We can end up here if the table doesn't exist yet, e.g. we are running the initial migration.
     * In this case, the error is non-fatal. Anything else, we re-throw.
     */
    if (!Str::contains($tableNotFound->getMessage(), "Base table or view not found")) {
        throw $tableNotFound;
    }
}
