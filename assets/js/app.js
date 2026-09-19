(function () {
    'use strict';

    const body = document.body;
    const menu = document.querySelector('#check');
    const navLinks = [...document.querySelectorAll('.nav__link')];
    const sections = [...document.querySelectorAll('section[id]')];

    document.querySelectorAll('img').forEach((image, index) => {
        image.decoding = 'async';
        if (index > 2 && !image.hasAttribute('loading')) image.loading = 'lazy';
    });

    const setActiveSection = (id) => {
        if (!id) return;
        body.dataset.activeSection = id;
        navLinks.forEach((link) => {
            const active = link.getAttribute('href') === `#${id}`;
            link.classList.toggle('active', active);
            if (active) link.setAttribute('aria-current', 'page');
            else link.removeAttribute('aria-current');
        });
    };

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            const visible = entries.filter((entry) => entry.isIntersecting).sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
            if (visible) setActiveSection(visible.target.id);
        }, { rootMargin: '-22% 0px -58% 0px', threshold: [0, .2, .5] });
        sections.forEach((section) => observer.observe(section));
    }

    navLinks.forEach((link) => link.addEventListener('click', () => {
        if (menu) menu.checked = false;
    }));

    document.querySelectorAll('.carta').forEach((card, index) => {
        card.tabIndex = 0;
        card.setAttribute('role', 'button');
        card.setAttribute('aria-label', 'Mostrar información');
        card.addEventListener('click', () => card.classList.toggle('is-flipped'));
        card.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                card.classList.toggle('is-flipped');
            }
        });
        card.addEventListener('focus', () => card.classList.add('is-focused'));
        card.addEventListener('blur', () => card.classList.remove('is-focused'));
        const hint = document.createElement('span');
        hint.className = 'sr-only';
        hint.textContent = 'Pulsa Enter o espacio para girar la tarjeta.';
        card.appendChild(hint);
    });

    document.querySelectorAll('.personajesPrincipales--box').forEach((card) => {
        card.tabIndex = 0;
        card.addEventListener('focus', () => card.classList.add('is-focused'));
        card.addEventListener('blur', () => card.classList.remove('is-focused'));
    });
})();
