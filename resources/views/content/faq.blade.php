@extends('layouts.base')

@section('content')
<a class="skip-link screen-reader-text" href="#page-content">Skip to content</a>
<div id="page" class="site">
    <div class="header-wrapper">
        <div class="header color-overlay custom-mobile-image" style="background-image:url(/img/dragon2.png); background-attachment: fixed; background-color:#111111">
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