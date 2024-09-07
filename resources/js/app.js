import './bootstrap';

import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/brands';
import 'vanilla-cookieconsent/dist/cookieconsent.css'
import * as CookieConsent from "vanilla-cookieconsent";
import 'laravel-datatables-vite';

$(function() {
    function formatState (state) {
        if (!state.id) {
            return state.text;
        }
        return $('<span style="color: ' + (state.element.style.color ? state.element.style.color : '#111') + '">' + state.text + '</span>');
    }

    $('.select2').select2({
        templateResult: formatState,
        templateSelection: formatState,
    });

    const menu = $("#menu");
    let bars = document.querySelectorAll('.bar');

    function toggleHamburger(e) {
        $(".hideable").toggleClass("sticky");
        bars.forEach(bar => bar.classList.toggle('x'));
    }

    menu.on('hide.bs.dropdown', function(e) {
        toggleHamburger(e);
    });
    menu.on('show.bs.dropdown', function(e) {
        toggleHamburger(e);
    });

    if (window.location.hash === "#embed") {
        $(".jumbotron").css("visibility", "hidden");
        $(".dblpromote").css("display", "none");
    }

    let table = new DataTable('.datatable', {
        "ajax": {
            "url": window.location.href.replace("/menu/", "/data/"),
            "type": "POST"
        },
        "rowCallback": function( row, data ) {
            $(row).click(function (e) {
                window.location.href = window.location.href + "/edit/" + $(this)[0].id;
            });
        },
        "serverSide": true,
        "deferRender": true,
        "pageLength": 25,
        "responsive": true,
        "lengthMenu": [ [10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000, "All"] ],
    });
});
