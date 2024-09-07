import './bootstrap';
import toastr from "toastr";

$(function() {
    $(".subscribe-button").click(async function() {
        if (typeof window.chargebeeInstance === 'undefined') {
            toastr.warning("Checkout instance not available. Please try again later.");
        }
        const planId = $(this).attr("data-plan-id");
        window.chargebeeInstance.openCheckout({
            hostedPage: async function() {
                return (await axios({
                    method: 'post',
                    url: '/generate/' + planId,
                    data: '',
                    responseType: 'json',
                })).data;
            },
            loaded: function() {
            },
            close: function() {
                window.location.href = "/";
            },
            step: function(value) {
                // value -> which step in checkout
            },
            success: function(hostedPageId) {
                window.location.href = "/success";
            },
            error: function() {
                toastr.warning("Unable to load checkout. Please try again later.");
            }
        });
    });
});
