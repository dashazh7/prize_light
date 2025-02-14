const swiper = new Swiper('.swiper', {
    slidesPerGroup: 3, 
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
            spaceBetween: 70
        },
        0: {
            slidesPerView: 1
        },    
    },
});
