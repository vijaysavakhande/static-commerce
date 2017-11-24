;(function($) {
  'use strict';
  $(document).ready(function() {
    $('.close2').on('click', function(c){
      $('.rem2').fadeOut('slow', function(c){
        $('.rem2').remove();
      });
    });

    $('.close3').on('click', function(c){
      $('.rem3').fadeOut('slow', function(c){
        $('.rem3').remove();
      });
    }); 
    $('.value-plus').on('click', function(){
      var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
      divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
      var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
      if(newVal>=1) divUpd.text(newVal);
    });
    $('.close1').on('click', function (c) {
      $('.rem1').fadeOut('slow', function (c) {
        $('.rem1').remove();
      });
    });
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
            slidesToShow: 1,
            arrows: true,
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
          }
        },
      ],
    });
  });
})(jQuery);