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
                            <div id="post-{{ $post->id }}" class="post-{{ $post->id }} post type-post status-publish format-standard has-post-thumbnail hentry category-website">
                                <div class="yoast-breadcrumbs ms-5">
                                    <span>
                                        @foreach ($post->breadcrumbs() as $crumb)
                                            <span>
                                                <a href="{{ $crumb["url"] }}">{{ $crumb["title"] }}</a>
                                            </span>
                                            @if (!$loop->last)
                                                »
                                            @endif
                                        @endforeach
                                    </span>
                                </div>
                                <div class="post-content-single">
                                    <h2>{{ $post->title }}</h2>
                                    @if (!empty($headings))
                                        @include('includes.toc', ['entries' => $headings])
                                    @endif
                                    <div class="post-content-inner">
                                        {!! $post->content !!}
                                    </div>
                                    @if ($children->exists())
                                        <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide">
                                        <ul style="text-transform:capitalize;" class="wp-block-page-list has-small-font-size">
                                            @foreach ($children->orderBy("created_at")->get() as $child)
                                                <li class="wp-block-pages-list__item @if($child->children()->count()) has-child @endif">
                                                    <a class="wp-block-pages-list__item__link" href="/{{ $child->url }}/">
                                                        {{ $child->title }}
                                                    </a>
                                                    @if ($child->children()->count())
                                                        <ul class="wp-block-navigation__submenu-container">
                                                        @foreach ($child->children()->orderBy("id")->get() as $subChild)
                                                            <li class="wp-block-pages-list__item">
                                                                <a class="wp-block-pages-list__item__link" href="/{{ $subChild->url }}/">
                                                                    {{ $subChild->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
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