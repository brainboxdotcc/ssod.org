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
                    //document.body.classList.toggle('nav-open');
                });
        </script>
    </div>
    <style>
        #slideout {
            position: fixed;
            top: 1em;
            right: 0;
            width: 35px;
            -webkit-transition-duration: 0.3s;
            -moz-transition-duration: 0.3s;
            -o-transition-duration: 0.3s;
            transition-duration: 0.3s;
            z-index: 500;
        }
        #slideout_list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #slideout_list li {
            line-height: 2.5rem;
            cursor: pointer;
            width: 100%;
            padding-left: 40px;
            padding-right: 15px;
        }
        #slideout_list li:hover {
            background: #e8e8e8;
        }
        #slideout_list li a {
            color: #111;
            font-weight: 400;
            text-decoration: none;
        }
        #slideout_tab {
            position: relative;
            top: 0;
            font-size: 2em;
            right: 1em;
            padding: 12px 6px 12px 12px;
            text-align: center;
            background: transparent;
            color: #fff;
            cursor:pointer;
        }
        #slideout_inner {
            z-index: 500;
            position: absolute;
            top: -0;
            left: 64px;
            background: white;
            opacity: 0.99;
            width: 455px;
            padding-top: 15px;
            padding-bottom: 15px;
            height: auto;
            cursor:auto;
            border-radius: 15px 0 0 15px;
            border: 1px solid #7a7a7a;
        }
        #showblock:checked + #slideout{right: 480px;}
        #showblock{display:none;}

        .container {
            position: relative;
            padding: 1.5rem;
        }

        .menu-toggle {
            position: absolute;
            right: 1.5rem;
            top: 49%;
            transform: translate(0, -50%);
            height: 26px;
            width: 29px;

            &, &:hover {
                color: #fff;
            }
        }

        .menu-toggle-bar {
            display: block;
            position: absolute;
            top: 50%;
            margin-top: -1px;
            right: 0;
            width: 100%;
            height: 4px;
            border-radius: 4px;
            background-color: white;
            transition: all 0.3s ease;

            &.menu-toggle-bar--top {
                transform: translate(0, -8px);
            }
            &.menu-toggle-bar--middle {
            }
            &.menu-toggle-bar--bottom {
                transform: translate(0, 8px);
            }

            .nav-open & {
                &.menu-toggle-bar--top {
                    transform: translate(0, 0) rotate(45deg);
                }
                &.menu-toggle-bar--middle {
                    opacity: 0;
                }
                &.menu-toggle-bar--bottom {
                    transform: translate(0, 0) rotate(-45deg);
                }
            }
        }
    </style>
    <div class="header-wrapper">
        <div class="header-homepage  color-overlay" style="; background-image:url(/img/background-scaled.jpg); background-color:#111111" data-parallax-depth="20">

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
                            <h1 class="hero-title" style="">Seven Spells Of Destruction: An Original Discord RPG Bot</h1><p class="header-subtitle">Explore an action packed fantastical land in this multi-player open-world role playing game for Discord!</p><div data-dynamic-mod-container class="header-buttons-wrapper"><a class="button big color1 round customize-unpreviewable" target="_blank" href="https://discord.com/oauth2/authorize?client_id=620654573547159553&#038;scope=bot%20applications.commands&#038;permissions=414464609344&#038;response_type=code&#038;redirect_uri=https%3A%2F%2Fadmin.ssod.org%2Ftrack%2F%3Fsource%3Ddirect">Invite Bot</a><a class="button big color-white round outline customize-unpreviewable" target="_self" href="https://premium.ssod.org">Get Premium</a></div> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page-content" class="page-content">
        <div class="content">
            <div id="attract-1" style="background-color: #f5fafd;" data-label="Attract 1" data-id="content-7-mc" data-export-id="content-7-mc" data-category="content" class="content-7-mc content-section content-section-spacing"><div class="gridContainer"> <div class="row middle-sm"><div class="col-sm-6 space-bottom-xs" data-type="column"> <h2 class>Take Part In An Epic Quest</h2> <p class>Save the land of Cryptillia from a threat beyond imagining in Brainbox.cc’s latest game, an open world, multiplayer role playing game for Discord. Available to play right now on Discord, you can take part in the the game today by inviting the bot. Click here to find out more about the bot and the game.</p> <a class="button blue" href="/frequently-asked-questions" target="_self" data-cp-link="1" rel="noopener">FREQUENTLY ASKED QUESTIONS</a><a class="button blue" href="/discord-bot-commands" target="_self" data-cp-link="1" rel="noopener">DISCORD BOT COMMANDS</a></div> <div class="col-sm-6" data-type="column"> <img decoding="async" class="shadow-large" src="/img/cropped-littletown.jpg"></div> </div></div> </div><div id="attract-2" style="background-color: #ffffff;" data-label="Attract 2" data-id="content-8-mc" data-export-id="content-8-mc" data-category="content" class="content-8-mc content-section content-section-spacing"><div class="gridContainer"> <div class="row middle-sm"><div class="col-sm-6 space-bottom-xs space-top-xs" data-type="column">
                            <img decoding="async" class="shadow-large" src="/img/cropped-the-wizards-keep.jpg"></div> <div class="col-sm-6" data-type="column"><h2 class>Discover vast treasure and hidden secrets</h2> <p class>The lore-heavy world is waiting for you to discover its hidden secrets. Just below the surface lie hidden truths, forgotten pasts and deep mysteries which only you can solve.
                                Use this knowledge against your foes, or simply find new weapons and armour amongst the relics of the past to use to your advantage.</p> <a class="button color1" href="https://discord.com/oauth2/authorize?client_id=620654573547159553&amp;scope=bot%20applications.commands&amp;permissions=414464609344&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fadmin.ssod.org%2Ftrack%2F%3Fsource%3Ddirect" target="_blank" data-cp-link="1" rel="noopener noreferrer">ADD TO YOUR DISCORD SERVER</a></div> </div></div> </div><div data-label="Attract 3" data-id="about--1" data-export-id="about-4" data-category="about" class="about-4 content-section content-section-spacing" id="attract-3" style="background-color: rgb(245, 250, 253);"><div class="gridContainer"> <div class="row middle-sm text-center"><div class="col-sm-5 space-bottom-xs content-left-sm" data-type="column"> <h2 class>Stuck? We are here!</h2> <p class>If you get stuck in the game, or just want to chat, you should join our Discord server. The official Brainbox.cc discord offers welcoming support and chat about this bot and the game world, regardless of if you are a beginner or an experienced adventurer, you will find a home and respite from the monsters of Cryptillia here!</p> <a class="button color1" href="https://discord.gg/brainbox" target="_blank" data-cp-link="1" rel="noopener">JOIN THE DISCORD</a><a class="button blue" href="/lore-guide" target="_self" data-cp-link="1" rel="noopener">LORE GUIDE</a></div> <div class="col-sm-7 flexbox center-xs middle-xs image-group-2-img"> <img decoding="async" class="img-1 shadow-large" data-size="250x200" src="/img/cropped-cropped-mine-town.jpg"> <img decoding="async" class="img-2 shadow-large" data-size="220x170" src="/img/cropped-floodplain-village.jpg"></div> </div></div> </div><div id="news-and-updates" style="background-color: rgb(245, 250, 253); background-image: none;" data-label="News and Updates" data-id="blog-section-mc" data-export-id="blog-section-mc" data-category="latest_news" class="blog-section-mc blog-section-standard content-section content-section-spacing"><div class="gridContainer"> <div class="row"><div data-type="column" class="section-title-col"> <h2 class>News And Updates</h2><p class="lead">Keep up to date with development by following our blog. All changes, technical and cosmetic, are written about here.</p> </div> </div> <div class="row"> <div data-type="row" data-dynamic-columns="handled" data-content-shortcode="mesmerize_latest_news posts=&quot;3&quot; columns=&quot;4&quot; "> <div class="row center-sm content-left-sm">
                                <div id="post-727" class="col-sm-6 col-md-4 space-bottom space-bottom-xs">
                                    <div class="post-content card y-move bordered">
                                        <div class="post-thumbnail">
                                            <a href="/lore-guide-now-available-on-the-web/" class="post-list-item-thumb ">
                                                <img src="/img/image-9-768x566.png" class="attachment-post-thumbnail size-post-thumbnail has-transparency wp-post-image" />
                                            </a>
                                        </div>
                                        <div class="col-padding col-padding-xs">
                                            <h3 class="post-title space-bottom-small">
                                                <a href="/lore-guide-now-available-on-the-web/" rel="bookmark">
                                                    Lore Guide now available on the web! </a>
                                            </h3>
                                            <p>The Encyclopaedia Cryptillius, the lore and information repository for The Seven Spells of Destruction, is now available on the web for use in the browser! This will help when creating[&hellip;]</p>
                                            <a class="read-more link" href="/lore-guide-now-available-on-the-web/">
                                                Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="post-335" class="col-sm-6 col-md-4 space-bottom space-bottom-xs">
                                    <div class="post-content card y-move bordered">
                                        <div class="post-thumbnail">
                                            <a href="/bot-now-listed-in-application-directory/" class="post-list-item-thumb ">
                                                <img loading="lazy" decoding="async" width="1024" height="753" src="/img/dragon2-1024x753.png" class="attachment-post-thumbnail size-post-thumbnail has-transparency wp-post-image" alt srcset="/img/dragon2-1024x753.png 1024w, /img/dragon2-300x220.png 300w, /img/dragon2-768x564.png 768w, /img/dragon2.png 1045w" sizes="auto, (max-width: 1024px) 100vw, 1024px" data-has-transparency="true" data-dominant-color="8e6646" style="--dominant-color: #8e6646;" /> </a>
                                        </div>
                                        <div class="col-padding col-padding-xs">
                                            <h3 class="post-title space-bottom-small">
                                                <a href="/bot-now-listed-in-application-directory/" rel="bookmark">
                                                    Bot Now Listed in Application Directory </a>
                                            </h3>
                                            <p>We are happy to announce that the Seven Spells Of Destruction bot is now a verified bot listed in the official Discord Application Directory! You can now find the bot in the application directory by searching for it by name.</p>
                                            <a class="read-more link" href="/bot-now-listed-in-application-directory/">
                                                Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="post-235" class="col-sm-6 col-md-4 space-bottom space-bottom-xs">
                                    <div class="post-content card y-move bordered">
                                        <div class="post-thumbnail">
                                            <a href="/discord-bot-live/" class="post-list-item-thumb ">
                                                <img loading="lazy" decoding="async" width="1024" height="754" src="/img/port-obligan-1024x754.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="/img/port-obligan-1024x754.jpg 1024w, /img/port-obligan-300x221.jpg 300w, /img/port-obligan-768x566.jpg 768w, /img/port-obligan-1536x1131.jpg 1536w, /img/port-obligan-1467x1080.jpg 1467w, /img/port-obligan.jpg 2048w" sizes="auto, (max-width: 1024px) 100vw, 1024px" /> </a>
                                        </div>
                                        <div class="col-padding col-padding-xs">
                                            <h3 class="post-title space-bottom-small">
                                                <a href="/discord-bot-live/" rel="bookmark">
                                                    Discord Bot Live </a>
                                            </h3>
                                            <p>We are happy to announce that the Seven Spells of Destruction Discord bot is now live, and ready for use. You can create characters and join the game. The majority of single player features are implemented and new multiplayer features are being added into the game daily&#8230;</p>
                                            <a class="read-more link" href="/discord-bot-live/">
                                                Read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <a class="button color1" data-attr-shortcode="href:mesmerize_blog_link" href="/blog/">
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
