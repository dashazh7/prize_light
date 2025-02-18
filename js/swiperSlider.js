const swiper = new Swiper('.swiper', {
    loop: true, 
    slidesPerView: 'auto', 
    speed: 1500,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
    breakpoints: {
        1100: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 70
        },
        900: {
            slidesPerView: 2,
            slidesPerGroup: 2, 
            spaceBetween: 0
        },
        0: {
            slidesPerView: 1
        },    
    },
});
