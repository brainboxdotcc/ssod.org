@extends('layouts.base')

@section('content')
<a class="skip-link screen-reader-text" href="#page-content">Skip to content</a>
<div id="page" class="site">
    <div class="header-wrapper">
        <div class="header color-overlay custom-mobile-image" style="background-image:url(/img/dragon2.png); background-attachment: fixed; background-color:#111111">
            <div class="inner-header-description gridContainer">
                <div class="row header-description-row">
                    <div class="col-xs col-xs-12">
                        <h1 class="hero-title"> Discord RPG Bot Commands </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page-content" class="page-content">
        <div class="gridContainer content">
            <div id="post-293" class="post-0 page type-page status-publish has-post-thumbnail hentry">
                <div>
                    @include('includes.toc', ['entries' => [
                        '/start',
                        '/profile [username]',
                        '/gender [male|female]',
                        '/guild create <name>',
                        '/guild join <name>',
                        '/guild leave',
                        '/guild info <name>',
                        '/lore',
                        '/map',
                        '/vote',
                        '/bio text [player bio]',
                        '/bio picture [image]',
                        '/rename [old name] [new name]',
                        '/reset',
                        '/info',
                        '/premium',
                        '/help',
                    ]])
                    @include('includes.block-with-heading', ['title' => '/start', 'blade' => 'content.commands.start'])
                    @include('includes.block-with-heading', ['title' => '/profile [username]', 'blade' => 'content.commands.profile'])
                    @include('includes.block-with-heading', ['title' => '/gender [male|female]', 'blade' => 'content.commands.gender'])
                    @include('includes.block-with-heading', ['title' => '/guild create <name>', 'blade'=> 'content.commands.guild-create'])
                    @include('includes.block-with-heading', ['title' => '/guild join <name>', 'blade'=> 'content.commands.guild-join'])
                    @include('includes.block-with-heading', ['title' => '/guild leave', 'blade'=> 'content.commands.guild-leave'])
                    @include('includes.block-with-heading', ['title' => '/guild info <name>', 'blade'=> 'content.commands.guild-info'])
                    @include('includes.block-with-heading', ['title' => '/lore', 'blade'=> 'content.commands.lore'])
                    @include('includes.block-with-heading', ['title' => '/map', 'blade'=> 'content.commands.map'])
                    @include('includes.block-with-heading', ['title' => '/vote', 'blade'=> 'content.commands.vote'])
                    @include('includes.block-with-heading', ['title' => '/bio text [player bio]', 'blade'=> 'content.commands.bio-text'])
                    @include('includes.block-with-heading', ['title' => '/bio picture [image]', 'blade'=> 'content.commands.bio-picture'])
                    @include('includes.block-with-heading', ['title' => '/rename [old name] [new name]', 'blade'=> 'content.commands.rename'])
                    @include('includes.block-with-heading', ['title' => '/reset', 'blade'=> 'content.commands.reset'])
                    @include('includes.block-with-heading', ['title' => '/info', 'blade'=> 'content.commands.info'])
                    @include('includes.block-with-heading', ['title' => '/premium', 'blade'=> 'content.commands.premium'])
                    @include('includes.block-with-heading', ['title' => '/help', 'blade'=> 'content.commands.help'])
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection