document.addEventListener('DOMContentLoaded', () => {
    const contactIcon = document.querySelector('.contact-icon');
    const contactWindow = document.querySelector('.navigation__contact-window');

    contactIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        contactWindow.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!contactWindow.contains(e.target) && !contactIcon.contains(e.target)) {
            contactWindow.classList.remove('active');
        }
    });
});