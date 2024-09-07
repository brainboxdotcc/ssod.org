import './bootstrap';

$(function() {

    const verifySubscription = () => {
        axios({
            method: 'post',
            data: '',
            url: '/validate-payment',
            responseType: 'json',
        }).then(function (response) {
                if (response.data.validated) {
                    window.location.href = "/manage-subscription";
                }
        }).catch(() => {});
        setTimeout(() => { verifySubscription(); }, 1000);
    };

    verifySubscription();
});
