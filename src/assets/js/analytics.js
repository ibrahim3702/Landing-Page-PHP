// Epic 5: Analytics & Performance
// - Sends Web Vitals to GA4
// - Tracks pricing CTA clicks with plan details

// Guard if GA not initialized yet
function sendGA(eventName, params = {}) {
    if (typeof window.gtag === 'function') {
        window.gtag('event', eventName, params);
    } else {
        // Fallback: debug in console to verify events during dev
        console.debug('[GA Fallback]', eventName, params);
    }
}

// Track pricing CTA clicks
(function trackPricingCTAs() {
    const ctas = document.querySelectorAll('.pricing-cta[data-plan]');
    ctas.forEach((btn) => {
        btn.addEventListener('click', () => {
            const plan = btn.getAttribute('data-plan') || 'Unknown';
            sendGA('select_plan', {
                plan_name: plan,
                location: 'pricing_section',
            });
        });
    });
})();

// Web Vitals to GA4
// Uses ESM build from unpkg; small and non-blocking
import { onCLS, onINP, onLCP } from 'https://unpkg.com/web-vitals@4/dist/web-vitals.attribution.js?module';

function sendToGA({ name, value, id }) {
    // GA expects integers for timing; CLS needs to be scaled
    const metricValue = name === 'CLS' ? Math.round(value * 1000) : Math.round(value);
    sendGA('web_vitals', {
        event_category: 'Web Vitals',
        event_label: name,
        value: metricValue,
        metric_id: id,
        non_interaction: true,
    });
}

onCLS(sendToGA);
onINP(sendToGA);
onLCP(sendToGA);