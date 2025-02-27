const toggleCards = document.querySelectorAll('.projects__card');
const toggleButtons = document.querySelectorAll('.projects__card-arrow-button');

const swiperNext = document.querySelector('.swiper-button-next');
const swiperPrev = document.querySelector('.swiper-button-prev');

function toggleCard(card) {
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
}

toggleCards.forEach(card => {
    card.addEventListener('click', function (event) {
        if (window.innerWidth > 700) return;
        if (event.target.closest('.projects__card-arrow-button')) return; 
        toggleCard(card);
    });
});

toggleButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        event.stopPropagation(); 
        const card = button.closest('.projects__card');
        toggleCard(card);
    });
});
