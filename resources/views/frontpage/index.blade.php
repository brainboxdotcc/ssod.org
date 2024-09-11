@extends('layouts.base')

@section('content')
    <div class="main_menu_col col-xs">

        <input type="checkbox"  id="showblock">
        <div id="slideout">
            <label id="slideout_tab" for="showblock" title="Admin Slider">
                <div class="container">
                    <a id="menu-toggle" class="menu-toggle">
                        <span class="menu-toggle-bar menu-toggle-bar--top"></span>
                        <span class="menu-toggle-bar menu-toggle-bar--middle"></span>
                        <span class="menu-toggle-bar menu-toggle-bar--bottom"></span>
                    </a>
                </div>
            </label>
            <div id="slideout_inner">
                <ul id="slideout_list">
                    <li><a href="/#page-top" aria-current="page">Home</a></li>
                    <li><a href="/frequently-asked-questions/">Freqently Asked Questions</a></li>
                    <li><a href="https://premium.ssod.org/">Get Premium</a></li>
                    <li><a href="/discord-bot-commands/">Bot Commands</a></li>
                    <li><a href="/blog/">Development Blog</a></li>
                    <li><a href="/terms-of-service/">Terms Of Service</a></li>
                    <li><a href="/privacy-policy/">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <script>
            document.getElementById('slideout_tab')
                .addEventListener('click', function(){
                    setTimeout(() => {
                        const s = $("#showblock").is(":checked");
                        if (s) {
                            $("body").addClass("nav-open");
                        } else {
                            $("body").removeClass("nav-open");
                        }
                    }, 10);
                });
        </script>
    </div>
    <div class="header-wrapper">
        <div class="header-homepage  color-overlay" style="; background-image:url(/img/background-scaled.jpg); background-color:#111111">

            <div class="navigation-wrapper d-lg-block d-xl-block d-xxl-block d-none">
                <div class="row basis-auto">
                    <div class="col-xs col-sm-fit">
                        <a href="/" class="custom-logo-link">
                            <img style="width: auto; height: 235px; padding-top: 1em" src="/img/steam_library_logo_640x360.png" class="custom-logo" alt="The Seven Spells Of Destruction Discord RPG Bot">
                        </a>
                    </div>
                </div>
            </div>

            <div class="header-description gridContainer content-on-center">
                <div class="row header-description-row middle-sm">
                    <div class="header-content header-content-centered col-md col-xs-12">
                        <div class="align-holder center">
                            <div class="d-sm-block" style="height: 140px !important"></div>
                            <h1 class="hero-title" style="">Seven Spells Of Destruction: An Original Discord RPG Bot</h1>
                            <p class="header-subtitle">Explore an action packed fantastical land in this multi-player open-world role playing game for Discord!</p>
                            <div class="header-buttons-wrapper">
                                <a class="button big color1 round customize-unpreviewable" target="_blank" href="https://discord.com/oauth2/authorize?client_id=620654573547159553&#038;scope=bot%20applications.commands&#038;permissions=414464609344&#038;response_type=code&#038;redirect_uri=https%3A%2F%2Fadmin.ssod.org%2Ftrack%2F%3Fsource%3Ddirect">
                                    Invite Bot
                                </a>
                                <a class="button big color-white round outline customize-unpreviewable" href="https://premium.ssod.org">
                                    Get Premium
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page-content" class="page-content">
        <div class="content">
            <div id="attract-1" style="background-color: #f5fafd;" class="content-7-mc content-section content-section-spacing">
                <div class="gridContainer">
                    <div class="row middle-sm">
                        <div class="col-sm-6 space-bottom-xs">
                            <h2 class>Take Part In An Epic Quest</h2>
                            <p>
                                Save the land of Cryptillia from a threat beyond imagining in Brainbox.cc’s latest game, an open world,
                                multiplayer role playing game for Discord. Available to play right now on Discord, you can take part in
                                the game today by inviting the bot. Click here to find out more about the bot and the game.
                            </p>
                            <a class="button blue" href="/frequently-asked-questions" rel="noopener">
                                FREQUENTLY ASKED QUESTIONS
                            </a>
                            <a class="button blue" href="/discord-bot-commands" rel="noopener">
                                DISCORD BOT COMMANDS
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <img decoding="async" class="shadow-large" src="/img/cropped-littletown.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="attract-2" style="background-color: #ffffff;" class="content-8-mc content-section content-section-spacing">
                <div class="gridContainer">
                    <div class="row middle-sm">
                        <div class="col-sm-6 space-bottom-xs space-top-xs">
                            <img decoding="async" class="shadow-large" src="/img/cropped-the-wizards-keep.jpg">
                        </div>
                        <div class="col-sm-6">
                            <h2>Discover vast treasure and hidden secrets</h2>
                            <p>
                                The lore-heavy world is waiting for you to discover its hidden secrets. Just below the
                                surface lie hidden truths, forgotten pasts and deep mysteries which only you can solve.
                                Use this knowledge against your foes, or simply find new weapons and armour amongst the
                                relics of the past to use to your advantage.
                            </p>
                            <a class="button color1" href="https://discord.com/oauth2/authorize?client_id=620654573547159553&amp;scope=bot%20applications.commands&amp;permissions=414464609344&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fadmin.ssod.org%2Ftrack%2F%3Fsource%3Ddirect" target="_blank" rel="noopener">
                                ADD TO YOUR DISCORD SERVER
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-4 content-section content-section-spacing" id="attract-3" style="background-color: rgb(245, 250, 253)">
                <div class="gridContainer">
                    <div class="row middle-sm text-center">
                        <div class="col-sm-5 space-bottom-xs content-left-sm">
                            <h2 class>Stuck? We are here!</h2>
                            <p>
                                If you get stuck in the game, or just want to chat, you should join our Discord server.
                                The official Brainbox.cc discord offers welcoming support and chat about this bot and
                                the game world, regardless of if you are a beginner or an experienced adventurer, you
                                will find a home and respite from the monsters of Cryptillia here!</p>
                                <a class="button color1" href="https://discord.gg/brainbox" target="_blank" rel="noopener">
                                    JOIN THE DISCORD
                                </a>
                            <a class="button blue" href="/lore-guide" rel="noopener">
                                LORE GUIDE
                            </a>
                        </div>
                        <div class="col-sm-7 flexbox center-xs middle-xs image-group-2-img">
                            <img decoding="async" class="img-1 shadow-large" src="/img/cropped-cropped-mine-town.jpg" alt="">
                            <img decoding="async" class="img-2 shadow-large" src="/img/cropped-floodplain-village.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="news-and-updates" style="background-color: rgb(245, 250, 253); background-image: none" class="blog-section-mc blog-section-standard content-section content-section-spacing">
                <div class="gridContainer">
                    <div class="row">
                        <div class="section-title-col">
                            <h2 class>News And Updates</h2>
                            <p class="lead">
                                Keep up to date with development by following our blog. All changes, technical and
                                cosmetic, are written about here.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <div class="row center-sm content-left-sm">
                                @foreach ($news as $newsItem)
                                    <div id="post-{{ $newsItem->id }}" class="col-sm-6 col-md-4 space-bottom space-bottom-xs">
                                        <div class="post-content card y-move bordered">
                                            <div class="post-thumbnail">
                                                <a href="/{{ $newsItem->url }}/" class="post-list-item-thumb">
                                                    <img src="{{ $newsItem->image }}" class="attachment-post-thumbnail size-post-thumbnail has-transparency wp-post-image" />
                                                </a>
                                            </div>
                                            <div class="col-padding col-padding-xs">
                                                <h3 class="post-title space-bottom-small">
                                                    <a href="/{{ $newsItem->url }}/" rel="bookmark">{{ $newsItem->title }}</a>
                                                </h3>
                                                <p>{{ Str::limit(strip_tags($newsItem->content), 223) }}</p>
                                                <a class="read-more link" href="/{{ $newsItem->url }}/">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <a class="button color1" href="/blog/">
                                VIEW NEWS AND UPDATES
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
@endsection
