import $ from 'jquery';
window.$ = window.jQuery = $;

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

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
