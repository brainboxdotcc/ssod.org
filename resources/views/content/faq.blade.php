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
    }
</style>
<a class="skip-link screen-reader-text" href="#page-content">Skip to content</a>
<div id="page" class="site">
    <div class="header-wrapper">
        <div class="header color-overlay custom-mobile-image" style="background-image:url(/img/dragon2.png); background-color:#111111" data-parallax-depth="20">
            <div class="inner-header-description gridContainer">
                <div class="row header-description-row">
                    <div class="col-xs col-xs-12">
                        <h1 class="hero-title"> Roleplay Bot Freqently Asked Questions </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page-content" class="page-content">
        <div class="gridContainer content">
            <div id="post-293" class="post-293 page type-page status-publish has-post-thumbnail hentry">
                <div>
                    @include('includes.toc', ['entries' => $faq->pluck('question')])
                    @foreach ($faq as $entry)
                        @include('includes.block-with-heading', ['title' => $entry->question, 'content' => $entry->answer])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection