function scrollToSectionAch(sectionId) {
    const section = document.getElementById(sectionId);
    if (!section) return;
    const carousel = section.closest('.owl-carousel');
    if (carousel) {
        if (carousel.classList.contains('slider-three')) {
            const parentSection = document.querySelector('.achievements');
            if (parentSection) {
                parentSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
        const allItems = carousel.querySelectorAll('.owl-item:not(.cloned) .item');
        const index = Array.from(allItems).findIndex(item => item.id === sectionId);
        if (index >= 0) {
            $(carousel).trigger('to.owl.carousel', [index, 300, true]);
        }
    } 
    history.pushState(null, '', '/' + sectionId);
}

window.addEventListener('load', () => {
    const path = window.location.pathname.slice(1);
    if (!path) return;
    const section = document.getElementById(path);
    if (!section) return;
    const carousel = section.closest('.owl-carousel');
    if (carousel) {
        if (carousel.classList.contains('slider-three')) {
            const parentSection = document.querySelector('.achievements');
            if (parentSection) {
                parentSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
        const allItems = carousel.querySelectorAll('.owl-item:not(.cloned) .item');
        const index = Array.from(allItems).findIndex(item => item.id === path);
        if (index >= 0) {
            $(carousel).trigger('to.owl.carousel', [index, 0, true]);
        }
    } else {
        section.scrollIntoView({ behavior: 'smooth' });
    }
});