$(document).ready(function(){
  $(".slider-one").owlCarousel({
    items: 3,
    loop: true,        
    margin: 35,        
    nav: true,         
    navText: ['<img src="./images/nav-left.svg" alt="">', 
              '<img src="./images/nav-right.svg" alt="">'], 
    dots: false,  
  });

  $('a[href^="#service"]').on('click', function (event) {
    event.preventDefault();
    const slideIndex = $(this).data('slide-to');  
  
    $('#services')[0].scrollIntoView();
  
    $('.owl-carousel').trigger('to.owl.carousel', [slideIndex, 1000]); 
  });

  
  $(".slider-two").owlCarousel({
    items: 2,
    loop: true,        
    margin: 30,        
    nav: true,         
    navText: ['<img src="./images/nav-left.svg" alt="">', 
              '<img src="./images/nav-right.svg" alt="">'],
    dots: false,  
  });
  
  $(".slider-three").owlCarousel({
    items: 3,
    loop: true,        
    margin: 36,        
    nav: true,         
    navText: ['<img src="./images/nav-left.svg" alt="">', 
              '<img src="./images/nav-right.svg" alt="">'],
    dots: false,  
  });
});