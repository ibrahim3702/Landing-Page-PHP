// Optional: time-based check (reject submissions under threshold)
(function () {
    const form = document.getElementById('contactForm');
    if (!form) return;
    const start = Date.now();
    form.addEventListener('submit', (e) => {
        const delta = Date.now() - start;
        if (delta < 1500) {
            e.preventDefault();
            alert('Please wait a moment before submitting.');
        }
    });
})();