@extends('layouts.base')

@section('content')
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
                                    <div class="yoast-breadcrumbs mb-3">
                                        <span>
                                            <span>
                                                <a href="/">Home</a>
                                            </span>
                                            »
                                            <span>
                                                <a href="/blog">Development Blog</a>
                                            </span>
                                            »
                                            <span>
                                                <a href="/{{ $post->url }}">{{ $post->title }}</a>
                                            </span>
                                        </span>
                                    </div>
                                    <h2>{{ $post->title }}</h2>
                                    <div class="row post-meta small">
                                        <div class="col-12">
                                            <ul class="is-bar">
                                                <li>by <a href="/blog/" rel="author">{{ $post->author }}</a></li>
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