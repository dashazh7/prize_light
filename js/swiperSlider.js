document.addEventListener("DOMContentLoaded", function () {
    var projectsSwiper = new Swiper(".servicesSwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: ".services-next",
            prevEl: ".services-prev",
        },
    });


  var achievementsSwiper = new Swiper(".achievementsSwiper", {
      slidesPerView: 3,
      spaceBetween: 55,
      navigation: {
          nextEl: ".achievements-next",
          prevEl: ".achievements-prev",
      },
  });

  var projectsSwiper = new Swiper(".projectsSwiper", {
      slidesPerView: 2,
      spaceBetween: 20,
      navigation: {
          nextEl: ".project-next",
          prevEl: ".project-prev",
      },
  });
});
