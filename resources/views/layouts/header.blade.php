<script type="text/javascript">
    (function (exports, d) {
        var _isReady = false,
            _event,
            _fns = [];

        function onReady(event) {
            d.removeEventListener("DOMContentLoaded", onReady);
            _isReady = true;
            _event = event;
            _fns.forEach(function (_fn) {
                var fn = _fn[0],
                    context = _fn[1];
                fn.call(context || exports, window.jQuery);
            });
        }

        function onReadyIe(event) {
            if (d.readyState === "complete") {
                d.detachEvent("onreadystatechange", onReadyIe);
                _isReady = true;
                _event = event;
                _fns.forEach(function (_fn) {
                    var fn = _fn[0],
                        context = _fn[1];
                    fn.call(context || exports, event);
                });
            }
        }

        d.addEventListener && d.addEventListener("DOMContentLoaded", onReady) ||
        d.attachEvent && d.attachEvent("onreadystatechange", onReadyIe);

        function domReady(fn, context) {
            if (_isReady) {
                fn.call(context, _event);
            }

            _fns.push([fn, context]);
        }

        exports.mesmerizeDomReady = domReady;
    })(window, document);
</script>
<style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
    :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
    :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
    .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<style id="dominant-color-styles-inline-css" type="text/css">
    img[data-dominant-color]:not(.has-transparency) { background-color: var(--dominant-color); }
</style>
@vite('resources/css/wordpress.css')
<style id="mesmerize-style-inline-css" type="text/css">
    img.logo.dark, img.custom-logo{width:auto;max-height:256px !important;}
    /** cached kirki style */@media screen and (min-width: 768px){.header-homepage{background-position:center center;}.header{background-position:center center;}}.header-homepage:not(.header-slide).color-overlay:before{background:#000000;}.header-homepage:not(.header-slide) .background-overlay,.header-homepage:not(.header-slide).color-overlay::before{opacity:0.1;}.header.color-overlay:before{background:#000000;}.header .background-overlay,.header.color-overlay::before{opacity:0.75;}.header-homepage .header-description-row{padding-top:0%;padding-bottom:0%;}.inner-header-description{padding-top:8%;padding-bottom:8%;}@media screen and (max-width:767px){.header-homepage .header-description-row{padding-top:10%;padding-bottom:15%;}}@media only screen and (min-width: 768px){.header-content .align-holder{width:80%!important;}.inner-header-description{text-align:center!important;}}
</style>
<link rel="stylesheet" id="mesmerize-fonts-css" href="" data-href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CMuli%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic&amp;subset=latin%2Clatin-ext&amp;display=swap" type="text/css" media="all">
<style data-name="header-overlap-with">
    @media screen and (min-width: 768px) {
        .mesmerize-front-page.overlap-first-section:not(.mesmerize-front-page-with-slider) .header-homepage {
            padding-bottom: 95px;
        }

        .mesmerize-front-page.overlap-first-section:not(.mesmerize-front-page-with-slider) .page-content div[data-overlap]:first-of-type > div:not([class*="section-separator"]) {
            margin-top: -95px;
        }
    }
</style>
<script type="application/ld+json" class="ez-toc-schema-markup-output">
    {"@context":"https://schema.org","@graph":[{"@context":"https://schema.org","@type":"SiteNavigationElement","@id":"#ez-toc","name":"Take Part In An Epic Quest","url":"/#take-part-in-an-epic-quest"},{"@context":"https://schema.org","@type":"SiteNavigationElement","@id":"#ez-toc","name":"Discover vast treasure and hidden secrets","url":"/#discover-vast-treasure-and-hidden-secrets"},{"@context":"https://schema.org","@type":"SiteNavigationElement","@id":"#ez-toc","name":"Stuck? We are here!","url":"/#stuck-we-are-here"},{"@context":"https://schema.org","@type":"SiteNavigationElement","@id":"#ez-toc","name":"News And Updates","url":"/#news-and-updates"},{"@context":"https://schema.org","@type":"SiteNavigationElement","@id":"#ez-toc","name":"Bot Now Listed in Application Directory","url":"/#bot-now-listed-in-application-directory"},{"@context":"https://schema.org","@type":"SiteNavigationElement","@id":"#ez-toc","name":"Discord Bot Live","url":"/#discord-bot-live"},{"@context":"https://schema.org","@type":"SiteNavigationElement","@id":"#ez-toc","name":"Background Story","url":"/#background-story"}]}
</script>
<style type="text/css" data-name="custom-mobile-image-position">
    @media screen and (max-width: 767px) {
        /*Custom mobile position*/
        .header-homepage {
            background-position: 50% 0px;
        }
    }
</style>
<script type="text/javascript" data-name="async-styles">
    (function () {
        var links = document.querySelectorAll('link[data-href]');
        for (var i = 0; i < links.length; i++) {
            var item = links[i];
            item.href = item.getAttribute('data-href')
        }
    })();
</script>
<style type="text/css">
    .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
</style>
<style type="text/css" id="custom-background-css">
    body.custom-background { background-color: #111111; }
</style>
<link rel="icon" href="/img/cropped-ssod-new-32x32.png" sizes="32x32" />
<link rel="icon" href="/img/cropped-ssod-new-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="/img/cropped-ssod-new-180x180.png" />
<meta name="msapplication-TileImage" content="/img/cropped-ssod-new-270x270.png" />
@vite('resources/scss/app.scss')
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
    .logo-above-menu {
        display: none !important;
    }
    #regulatory-buttons {
        background-attachment: fixed;
    }
    #post-3 {
        background: #f0f0f0 !important;
        padding: 1em !important;
        text-align: left;
    }
    #post-195 {
        background: #f0f0f0 !important;
        padding: 1em !important;
        text-align: left;
    }
    #post-213 {
        background: #f0f0f0 !important;
        padding: 1em !important;
        text-align: left;
    }
    #post-293 {
        background: #f0f0f0 !important;
        padding: 1em !important;
    }
    #post-7 {
        background: #f0f0f0 !important;
        padding: 1em !important;
    }
</style>
<style id="page-content-custom-styles"></style>
<style data-name="background-content-colors">
    .mesmerize-inner-page .page-content,
    .mesmerize-inner-page .content,
    .mesmerize-front-page.mesmerize-content-padding .page-content {
        background-color: #111111;
    }
</style>
<style>
    .screen-reader-text[href="#page-content"]:focus {
        background-color: #f1f1f1;
        border-radius: 3px;
        box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
        clip: auto !important;
        clip-path: none;
        color: #21759b;

    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v3.0.0-rc.17/dist/cookieconsent.css">
<script src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v3.0.0-rc.17/dist/cookieconsent.umd.js"></script>
