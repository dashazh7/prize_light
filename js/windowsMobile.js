document.addEventListener('DOMContentLoaded', () => {
    const menuIcon = document.querySelector('.navigation__menu-img');
    const menuWindow = document.querySelector('.navigation__menu-window');
    const screensWrapper = document.querySelector('.screens-wrapper');
    const menuAbout = document.querySelector('.menu-about-link');
    const menuBack = document.querySelector('.menu-back');

    const contactIcon = document.querySelector('.contact-icon');
    const contactWindow = document.querySelector('.navigation__contact-window');

    // --- Меню ---
    menuIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        if (!menuWindow.classList.contains('active')) {
            contactWindow.classList.remove('active');
        }
        menuWindow.classList.toggle('active');
        screensWrapper.style.transform = 'translateX(0)';
    });

    menuAbout.addEventListener('click', (e) => {
        e.preventDefault();
        screensWrapper.style.transform = 'translateX(-50%)';
    });

    menuBack.addEventListener('click', (e) => {
        e.preventDefault();
        screensWrapper.style.transform = 'translateX(0)';
    });

    // --- Контакты ---
    contactIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        if (!contactWindow.classList.contains('active')) {
            menuWindow.classList.remove('active');
            screensWrapper.style.transform = 'translateX(0)';
        }
        contactWindow.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!menuWindow.contains(e.target) && !menuIcon.contains(e.target)) {
            menuWindow.classList.remove('active');
            screensWrapper.style.transform = 'translateX(0)';
        }
        if (!contactWindow.contains(e.target) && !contactIcon.contains(e.target)) {
            contactWindow.classList.remove('active');
        }
    });
});
