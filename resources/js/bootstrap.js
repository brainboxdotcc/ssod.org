/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import $ from 'jquery';
window.$ = window.jQuery = $;

import _ from 'lodash';
window._ = _;

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl, {
        container: 'body'
    });
});

const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl, {
        animation: true,
        show: 500,
        hide: 100,
    });
});

import * as Sentry from "@sentry/browser";
Sentry.init({
    dsn: 'https://88f939430de83d08f6199dc23b882cd9@sentry.brainbox.cc/11',
    tunnel: '/error-tracing',
    environment: "production",
    integrations: [
        Sentry.browserTracingIntegration(),
        Sentry.replayIntegration(),
    ],
    release: "ssod-js@1.0.0",
    replaysOnErrorSampleRate: 1.0,
    replaysSessionSampleRate: 0.1,
    tracePropagationTargets: [],
    tracesSampleRate: 1.0,
});

const event = new Event('go');
window.dispatchEvent(event);
