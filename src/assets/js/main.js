// Epic 1 JS: Navigation toggle + minor accessibility enhancements
(function () {
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            const isOpen = navMenu.getAttribute('data-state') === 'open';
            navMenu.setAttribute('data-state', isOpen ? 'closed' : 'open');
            navToggle.setAttribute('aria-expanded', (!isOpen).toString());
        });
    }

    // Basic focus outline management (will expand later)
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Tab') {
            document.body.classList.add('user-tabbing');
        }
    });
})();