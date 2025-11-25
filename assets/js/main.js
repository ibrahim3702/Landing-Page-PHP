// Epic 2 JS: Navigation toggle improvements & accessibility refinements
(function () {
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.getElementById('navMenu');

    function setMenuState(open) {
        navMenu.setAttribute('data-state', open ? 'open' : 'closed');
        navToggle.setAttribute('aria-expanded', open.toString());
    }

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            const isOpen = navMenu.getAttribute('data-state') === 'open';
            setMenuState(!isOpen);
        });

        document.addEventListener('keydown', (e) => {
            // ESC closes mobile menu
            if (e.key === 'Escape' && navMenu.getAttribute('data-state') === 'open') {
                setMenuState(false);
                navToggle.focus();
            }
        });
    }

    // Keyboard focus detection for improved outlines
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Tab') {
            document.body.classList.add('user-tabbing');
        }
    });
})();