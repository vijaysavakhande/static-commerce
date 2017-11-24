;(function($) {
  'use strict';
  $(document).ready(function() {
    $("#flexiselDemo2").slick({
      autoplay: false,
      autoplaySpeed: 1500,
      arrows: true,
      centerMode: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 480,
          settings: {
            slidesToShow:1,
            arrows: true,
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow:1,
          }
        },
      ],
    });

    
    // $("#flexiselDemo2").flexisel({
    //   visibleItems:4,
    //   animationSpeed: 1000,
    //   autoPlay: true,
    //   autoPlaySpeed: 3000,        
    //   pauseOnHover: true,
    //   enableResponsiveBreakpoints: true,
    //   responsiveBreakpoints: { 
    //     portrait: { 
    //       changePoint:480,
    //       visibleItems: 1
    //     }, 
    //     landscape: { 
    //       changePoint:640,
    //       visibleItems:2
    //     },
    //     tablet: { 
    //       changePoint:768,
    //       visibleItems: 3
    //     }
    //   },
    // });
  });
})(jQuery);