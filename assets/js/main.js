// main.js - Interaction & Animation

document.addEventListener('DOMContentLoaded', () => {

    // 1. Mobile Navigation Logic (Existing)
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            const isOpen = navMenu.getAttribute('data-state') === 'open';
            navMenu.setAttribute('data-state', isOpen ? 'closed' : 'open');
            navToggle.setAttribute('aria-expanded', !isOpen);
        });
    }

    // 2. Scroll Reveal Animation (NEW)
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Trigger when 10% visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    const scrollElements = document.querySelectorAll('.reveal-on-scroll');
    scrollElements.forEach((el) => observer.observe(el));
});
// Filter Button Toggle Logic
const filterBtns = document.querySelectorAll('.filter-btn');
filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all
        filterBtns.forEach(b => b.classList.remove('active'));
        // Add to clicked
        btn.classList.add('active');
    });
});