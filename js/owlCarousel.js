$(document).ready(function(){
  $(".slider-one").owlCarousel({
    items: 3,
    loop: true,        
    margin: 35,        
    nav: true,         
    navText: ['<img src="./images/nav-left.svg" alt="">', 
              '<img src="./images/nav-right.svg" alt="">'], 
    dots: false,  
    responsive: {
      0: {
        items: 1,
        nav: false, 
        touchDrag: true,
        autoplay: true, 
        autoplayTimeout: 3000, 
        autoplayHoverPause: true,
      },
      360: {
        items: 1,
        nav: true,
        touchDrag: true,
        autoplay: false, 
      },
      900: {
        items: 2,
        nav: true,  
        touchDrag: false,
        autoplay: false, 
      },
      1101: {
        items: 3,
        nav: true,  
        touchDrag: false,
        autoplay: false, 
      }
    } 
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
      responsive: {
        0: {
          items: 1,
          nav: false, 
          touchDrag: true,
          autoplay: true, 
          autoplayTimeout: 3000, 
          autoplayHoverPause: true,
        },
        360: {
          items: 1,
        },
        1300: {
          items: 2
        }
      }
    });
    
    $(".slider-three").owlCarousel({
      items: 3,
      loop: true,        
      margin: 36,        
      nav: true,         
      navText: ['<img src="./images/nav-left.svg" alt="">', 
                '<img src="./images/nav-right.svg" alt="">'],
      dots: false,
      responsive: {
        0: {
          items: 1,
          nav: false, 
          touchDrag: true,
          autoplay: true, 
          autoplayTimeout: 3000, 
          autoplayHoverPause: true,
        },
        360: {
          items: 1,
        },
        1100: {
          items: 2
        },
        1300: {
          items: 3
        }
      }  
    });
  });