document.addEventListener('DOMContentLoaded', () => {
    const menuIcon = document.querySelector('.navigation__menu-img');
    const menuWindow = document.querySelector('.navigation__menu-window');
    const screensWrapper = document.querySelector('.screens-wrapper');
    const menuAbout = document.querySelector('.menu-about-link');
    const menuBack = document.querySelector('.menu-back');

    menuIcon.addEventListener('click', (e) => {
        e.stopPropagation();
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

    document.addEventListener('click', (e) => {
        if (!menuWindow.contains(e.target) && !menuIcon.contains(e.target)) {
            menuWindow.classList.remove('active');
            screensWrapper.style.transform = 'translateX(0)';
        }
    });
});