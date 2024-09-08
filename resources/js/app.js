import './bootstrap';

import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/brands';
import 'vanilla-cookieconsent/dist/cookieconsent.css'
import * as CookieConsent from "vanilla-cookieconsent";
import 'laravel-datatables-vite';

$(function() {

    if (window.location.hash === "#embed") {
        $(".jumbotron").css("visibility", "hidden");
        $(".dblpromote").css("display", "none");
    }
});
