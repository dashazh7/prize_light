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
      901: {
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
      margin: 32,        
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
          items: 3
        }
      }  
    });
  });