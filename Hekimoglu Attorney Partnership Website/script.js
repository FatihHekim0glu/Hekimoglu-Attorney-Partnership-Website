document.addEventListener('DOMContentLoaded', function() {
    const langSwitch = document.getElementById('langSwitch');
    const navLinks = document.querySelector('.nav-links');
    const menuToggle = document.createElement('button');
    menuToggle.textContent = '☰';
    menuToggle.classList.add('menu-toggle');
    document.querySelector('nav').prepend(menuToggle);

    // Language switch functionality
    langSwitch.addEventListener('click', function() {
        const currentLang = this.getAttribute('data-current');
        const newLang = currentLang === 'en' ? 'tr' : 'en';
        
        document.querySelectorAll('[data-en]').forEach(el => {
            el.textContent = el.getAttribute(`data-${newLang}`);
        });

        this.setAttribute('data-current', newLang);
        this.textContent = newLang === 'en' ? 'EN | TR' : 'TR | EN';
    });

    // Mobile menu toggle
    menuToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });
});