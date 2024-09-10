@extends('layouts.base')

@section('content')
    <style type="text/css" id="wp-custom-css">
        @import url('https://fonts.googleapis.com/css?family=New+Rocker&display=swap');

        .hero-title {
            font-family: 'New Rocker', cursive !important;
        }

        h2 {
            font-size: 2.2em;
            font-weight: 600;
        }

        code {
            padding: .2rem .2rem !important;
            background-color: #3d4270;
            color: #c0cdf2;
            font-weight: 600;
            font-family: inherit;
            border-radius: 4px;
        }

        h2 strong {
            font-weight: 600 !important;
        }

        .hero-title {
            text-shadow: 2px 2px 2px #CECECE;
        }

        #regulatory-buttons {
            background-attachment: fixed;
        }

        div[id^='post-'] {
            background: #f0f0f0 !important;
            padding: 1em !important;
            text-align: left;
        }

        .mesmerize-inner-page .page-content,
        .mesmerize-inner-page .content,
        .mesmerize-front-page.mesmerize-content-padding .page-content {
            background-color: #111111;
        }

        .screen-reader-text[href="#page-content"]:focus {
            background-color: #f1f1f1;
            border-radius: 3px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
            clip: auto !important;
            clip-path: none;
            color: #21759b;
        }

        .hero-title {
            width: 100%;
            text-align: center;
        }

        .gridContainer.content {
            margin-top: 6em;
            margin-bottom: 6em;
        }

        .post-content-single {
            color: #6B7C93;
            background-color: #f0f0f0;
        }

        .post-content-single strong {
            color: #6B7C93;
        }

        .nav-links {
            display: flex;
            background-color: #fff;
            box-shadow: none;
            -webkit-box-align: center;
            align-items: center;
            padding: 20px calc(2rem - 15px);
            width: 100%;
        }

        a {
            color: #03a9f4;
        }

        figure.aligncenter img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        img.wp-post-image {
            border-radius: 0.33em;
        }

        .is-bar {
            padding-left: 4px;
        }

        .alignleft {
            display: inline;
            float: left;
            margin-right: 1.5em;
        }

        .wp-block-page-list, .wp-block-navigation__submenu-container {
            padding-left: 0 !important;
        }

    </style>
    <a class="skip-link screen-reader-text" href="#page-content">Skip to content</a>
    <div id="page" class="site">
        <div class="header-wrapper">
            <div class="header color-overlay custom-mobile-image" style="background-image:url({{ $post->image }}); background-attachment: fixed; background-color:#111111">
                <div class="inner-header-description gridContainer">
                    <div class="row header-description-row">
                        <div class="col-xs col-xs-12">
                            <h1 class="hero-title">{{ $post->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-content" class="page-content">
            <div class="gridContainer content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="post-item post-item-single">
                            <div id="post-293" class="post-{{ $post->id }} post type-post status-publish format-standard has-post-thumbnail hentry category-website">
                                <div class="post-content-single">
                                    <h2>{{ $post->title }}</h2>
                                    <div class="row post-meta small">
                                        <div class="col-12">
                                            <ul class="is-bar">
                                                <li>by <a href="/author/{{ Str::lower($post->author) }}/" title="Posts by {{ $post->author }}" rel="author">{{ $post->author }}</a></li>
                                                <li>on {{$post->created_at->format('jS F Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post-content-inner">
                                        <img src="{{ $post->image }}" class="space-bottom-small space-bottom-xs has-transparency wp-post-image" alt="" decoding="async" style="--dominant-color: #4a3d32;">
                                        {!! $post->content !!}
                                    </div>
                                    @if ($next || $prev)
                                        <nav class="navigation post-navigation" aria-label="Posts">
                                            <h2 class="screen-reader-text">Post navigation</h2>
                                            <div class="row nav-links">
                                                @if ($prev)
                                                    <div class="col nav-previous">
                                                        <a href="/{{ $prev->url }}/" rel="prev">
                                                            <span class="meta-nav" aria-hidden="true">Previous:</span>
                                                            <span class="screen-reader-text">Previous post:</span>
                                                            <span class="post-title">{{ $prev->title }}</span>
                                                        </a>
                                                    </div>
                                                @endif
                                                @if ($next)
                                                    <div class="col nav-next">
                                                        <a href="/{{ $next->url }}/" rel="next">
                                                            <span class="meta-nav" aria-hidden="true">Next:</span>
                                                            <span class="screen-reader-text">Next post:</span>
                                                            <span class="post-title">{{ $next->title }}</span>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </nav>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
@endsection