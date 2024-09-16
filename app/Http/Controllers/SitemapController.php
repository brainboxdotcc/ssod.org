<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController
{
    public function siteMap(Request $request): Response
    {
        $sitemap = preg_replace("#^/#", "", $request->getPathInfo());
        $content = '';
        switch ($sitemap) {
            case 'sitemap.xml':
                $content = '<?xml version="1.0" encoding="UTF-8"?>
                            <sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
                                <sitemap><loc>' . config("app.url") . '/sitemap-root.xml</loc></sitemap>
                                <sitemap><loc>' . config("app.url") . '/sitemap-posttype-post.xml</loc></sitemap>
                                <sitemap><loc>' . config("app.url") . '/sitemap-posttype-page.xml</loc></sitemap>
                                <sitemap><loc>' . config("app.url") . '/sitemap-custom.xml</loc></sitemap>
                                <sitemap><loc>' . config("app.url") . '/sitemap-news.xml</loc></sitemap>
                            </sitemapindex>';
                break;
            case 'sitemap-root.xml':
                $content = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" >
                            <url><loc>' . config("app.url") . '/</loc><priority>1.0</priority></url>
                            </urlset>';
                break;
            case 'sitemap-custom.xml':
                $content = '<?xml version="1.0" encoding="UTF-8"?>
                            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" >
                            <url><loc>https://premium.ssod.org/</loc><priority>0.5</priority></url>
                            </urlset>';
                break;
            case 'sitemap-news.xml':
                $content = '<?xml version="1.0" encoding="UTF-8"?>
                            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" >';
                foreach (News::all() as $news) {
                    $content .= '<url>
                                    <loc>' . config("app.url") . '/' . htmlentities($news->url) . '</loc>
                                    <news:news>
                                        <news:publication>
                                            <news:name>' . env("APP_NAME") . '</news:name>
                                            <news:language>en</news:language>
                                        </news:publication>
                                        <news:publication_date>' . date('Y-m-d\TH:i:s+00:00', strtotime($news->created_at)) . '</news:publication_date>
                                        <news:title>' . htmlentities($news->title) . '</news:title>
                                        <news:keywords></news:keywords>
                                        <news:stock_tickers></news:stock_tickers>
                                    </news:news>
                                </url>';
                }
                $content .= '</urlset>';
                break;
            case 'sitemap-posttype-post.xml':
                $content = '<?xml version="1.0" encoding="UTF-8"?>
                            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">>';
                foreach (News::all() as $news) {
                    $content .= '<url>
                                    <loc>' . config("app.url") . '/' . htmlentities($news->url) . '</loc>
                                    <priority>0.8</priority>
                                    <lastmod>' . date('Y-m-d\TH:i:s+00:00', strtotime($news->created_at)) . '</lastmod>
                                    <image:image>
                                        <image:loc>' . htmlentities(config("app.url") . $news->image) . '</image:loc>
                                        <image:title><![CDATA[' . $news->title . ']]></image:title>
                                    </image:image>
                                </url>';
                }
                $content .= '</urlset>';
                break;
            case 'sitemap-posttype-page.xml':
                $content = '<?xml version="1.0" encoding="UTF-8"?>
                            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">>';
                foreach (Page::all() as $page) {
                    $content .= '<url>
                                    <loc>' . config("app.url") . '/' . htmlentities($page->url) . '</loc>
                                    <priority>0.8</priority>
                                    <lastmod>' . date('Y-m-d\TH:i:s+00:00', strtotime($page->created_at)) . '</lastmod>
                                    <image:image>
                                        <image:loc>' . htmlentities(config("app.url") . $page->image) . '</image:loc>
                                        <image:title><![CDATA[' . $page->title . ']]></image:title>
                                    </image:image>
                                </url>';
                }
                $content .= '</urlset>';
                break;
        }
        return response($content,200, ["Content-Type" => "application/xml"]);
    }
}