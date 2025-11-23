// Epic 3: Client-side validation & inline error messaging
(function () {
    const form = document.getElementById('contactForm');
    if (!form) return;

    // Pre-fill values from session (simple pattern: PHP sets values in session, you could expose via PHP echo)
    // For brevity we skip pulling session data—server redirects with error query param only.

    const fields = ['name', 'email', 'message'];
    const debounceDelay = 250;
    let debounceTimer;

    function setError(field, message) {
        const input = document.getElementById(field);
        const errorEl = document.querySelector(`[data-error-for="${field}"]`);
        if (!input || !errorEl) return;
        if (message) {
            input.classList.remove('valid');
            input.classList.add('error');
            errorEl.textContent = message;
        } else {
            input.classList.remove('error');
            input.classList.add('valid');
            errorEl.textContent = '';
        }
    }

    function validateField(field) {
        const input = document.getElementById(field);
        if (!input) return;
        const value = input.value.trim();
        let msg = '';

        if (value === '') {
            msg = 'This field is required.';
        } else {
            switch (field) {
                case 'name':
                    if (value.length < 2) msg = 'Enter at least 2 characters.';
                    break;
                case 'email':
                    // Simple email regex fallback
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(value)) msg = 'Enter a valid email address.';
                    break;
                case 'message':
                    if (value.length < 10) msg = 'Message too short (min 10 chars).';
                    break;
            }
        }
        setError(field, msg);
        return !msg;
    }

    function validateAll() {
        return fields.map(validateField).every(Boolean);
    }

    // Real-time validation with debounce
    fields.forEach(f => {
        const input = document.getElementById(f);
        if (!input) return;
        input.addEventListener('input', () => {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => validateField(f), debounceDelay);
        });
        input.addEventListener('blur', () => validateField(f));
    });

    form.addEventListener('submit', (e) => {
        const ok = validateAll();
        if (!ok) {
            e.preventDefault();
            // Focus first invalid field
            const firstInvalid = fields.find(f => {
                const el = document.getElementById(f);
                return el && el.classList.contains('error');
            });
            if (firstInvalid) {
                document.getElementById(firstInvalid).focus();
            }
        }
    });
})();