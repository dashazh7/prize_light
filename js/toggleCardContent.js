const toggleButtons = document.querySelectorAll('.toggle-button');

const swiperNext = document.querySelector('.swiper-button-next');
const swiperPrev = document.querySelector('.swiper-button-prev');

toggleButtons.forEach(button => {
    button.addEventListener('click', function () {
        const card = button.closest('.projects__card');
        const cardContent = card.querySelector('.projects__card-content');
        const cardHidden = card.querySelector('.projects__card-hidden');

        const isHiddenActive = cardHidden.classList.toggle('active');
        cardContent.classList.toggle('active', isHiddenActive);

        if (isHiddenActive) {
            swiperNext.style.opacity = "0";
            swiperNext.style.pointerEvents = "none";
            swiperPrev.style.opacity = "0";
            swiperPrev.style.pointerEvents = "none";
        } else {
            swiperNext.style.opacity = "1";
            swiperNext.style.pointerEvents = "auto";
            swiperPrev.style.opacity = "1";
            swiperPrev.style.pointerEvents = "auto";
        }
    });
});