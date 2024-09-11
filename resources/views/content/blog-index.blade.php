@extends('layouts.base')

@section('content')
    <a class="skip-link screen-reader-text" href="#page-content">Skip to content</a>
    <div id="page" class="site">
        <div class="header-wrapper">
            <div class="header color-overlay custom-mobile-image" style="background-image:url({{ $page_image }}); background-attachment: fixed; background-color:#111111">
                <div class="inner-header-description gridContainer">
                    <div class="row header-description-row">
                        <div class="col-xs col-xs-12">
                            <h1 class="hero-title">{{ $page_title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-content" class="page-content">
            <div class="gridContainer content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="post-list row">
                            <div id="post-0" class="post-0 post type-post format-standard has-post-thumbnail hentry category-website">
                                <div class="yoast-breadcrumbs">
                                   <span>
                                       <span>
                                           <a href="/">Home</a>
                                       </span>
                                           »
                                       <span>
                                           <a href="/blog">Development Blog</a>
                                       </span>
                                   </span>
                                </div>
                            </div>
                        </div>
                        <div class="post-list row">
                            @foreach ($posts as $post)
                                <div id="post-{{ $post->id }}">
                                    <div class="post-container">
                                        <div class="post-inner">
                                            <div class="row">
                                                <div class="col-md-4 thumb-col">
                                                    <div class="thumb-container">
                                                        <div class="post-thumbnail">
                                                            <a href="{{ $post->url }}" class="post-list-item-thumb ">
                                                                <img width="1024" height="754" src="{{ $post->image }}" class="attachment-post-thumbnail size-post-thumbnail has-transparency wp-post-image" alt="" decoding="async">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 text-left item-content">
                                                    <div class="list-padding">
                                                        <h2 class="post-title text-left h3">
                                                            <a href="{{ $post->url }}" rel="bookmark">{{ $post->title }}</a>
                                                        </h2>
                                                        <div class="row post-meta small">
                                                            <div class="col-md-10 col-xs-9">
                                                                <ul class="is-bar">
                                                                    <li>by <a href="/" rel="author">{{ $post->author }}</a></li>
                                                                    <li>on {{$post->created_at->format('jS F Y') }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="post-excerpt mt-4">
                                                            <p>
                                                                {{ Str::limit(strip_tags($post->content), 500, '...') }} <br />
                                                                <a class="read-more" href="{{ $post->url }}">
                                                                    Read more
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
@endsection