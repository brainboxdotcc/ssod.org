@extends('layouts.base')

@section('content')
<a class="skip-link screen-reader-text" href="#page-content">Skip to content</a>
<div id="page" class="site">
    <div class="header-wrapper">
        <div class="ssod-dragon-background header color-overlay custom-mobile-image">
            <div class="inner-header-description gridContainer">
                <div class="row header-description-row">
                    <div class="col-xs col-xs-12">
                        <h1 class="hero-title"> {{ $page_title }} </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page-content" class="page-content">
        <div class="gridContainer content">
            <div id="post-0" class="post-0 post type-post format-standard has-post-thumbnail hentry category-website">
                <div class="yoast-breadcrumbs">
                   <span>
                       <span>
                           <a href="/">Home</a>
                       </span>
                           »
                       <span>
                           <a href="/frequently-asked-questions">Freqently Asked Questions</a>
                       </span>
                   </span>
                </div>
            </div>
            <div id="post-293" class="post-293 page type-page status-publish has-post-thumbnail hentry">
                <div>
                    @include('includes.toc', ['groups' => $faq, 'categories' => $categories])
                    @foreach ($categories as $key => $title)
                        @if (isset($faq[$key]))
                            <h2 id="{{ $key }}">{{ $title }}</h2>
                            <hr />

                            @foreach ($faq[$key] as $entry)
                                @include('includes.block-with-heading', ['title' => $entry->question, 'content' => $entry->answer])
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection