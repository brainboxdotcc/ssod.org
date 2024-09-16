<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.meta')
    @include('layouts.header')
    @yield('custom_styles')
    @yield('head')
    @yield('local_styles')
    @vite('resources/js/app.js')
</head>
<body class="home page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-5 custom-background wp-custom-logo overlap-first-section ssod-front-page ssod-content-no-padding">
<a class="skip-link screen-reader-text" href="#page-content">Skip to content</a>
<div id="page-top" class="header-top homepage">
</div>
<div id="page" class="site">
    @yield('content')
</div>
<script type="module">
    if (window.location.hash !== "#embed" && typeof CookieConsent !== 'undefined') {
        CookieConsent.run({

            categories: {
                necessary: {
                    enabled: true,  // this category is enabled by default
                    readOnly: true  // this category cannot be disabled
                },
                analytics: {}
            },
            language: {
                default: 'en',
                translations: {
                    en: {
                        consentModal: {
                            title: 'This website needs cookies to function',
                            description: 'Cookies are needed to log in, and to use most features of this website.',
                            acceptAllBtn: 'That\'s Fine',
                            acceptNecessaryBtn: 'No Thanks',
                            showPreferencesBtn: 'Let Me Choose'
                        },
                        preferencesModal: {
                            title: 'Manage cookie preferences',
                            acceptAllBtn: 'Accept all',
                            acceptNecessaryBtn: 'Reject all',
                            savePreferencesBtn: 'Accept current selection',
                            closeIconLabel: 'Close modal',
                            sections: [
                                {
                                    title: 'Somebody said ... cookies?',
                                    description: 'I want one!'
                                },
                                {
                                    title: 'Strictly Necessary cookies',
                                    description: 'These cookies are essential for the proper functioning of the website and cannot be disabled.',

                                    //this field will generate a toggle linked to the 'necessary' category
                                    linkedCategory: 'necessary'
                                },
                                {
                                    title: 'Performance and Analytics',
                                    description: 'These cookies collect information about how you use our website. All of the data is anonymized and cannot be used to identify you.',
                                    linkedCategory: 'analytics'
                                },
                                {
                                    title: 'More information',
                                    description: 'For any queries in relation to my policy on cookies and your choices, please see the <a href="/privacy-policy">privacy policy</a>.'
                                }
                            ]
                        }
                    }
                }
            }
        });
    }
</script>
</body>
</html>
