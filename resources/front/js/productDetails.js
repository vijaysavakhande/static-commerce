; (function ($) {
  'use strict';
  $(document).ready(function () {
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

    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: true,
      focusOnSelect: true
    });
    $('.value-plus1').on('click', function () {
      var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
      divUpd.text(newVal);
    });

    $('.value-minus1').on('click', function () {
      var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
      if (newVal >= 1) divUpd.text(newVal);
    });
    $('#horizontalTab1').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion           
      width: 'auto', //auto or any width like 600px
      fit: true   // 100% fit in a container
    });    
  });
})(jQuery);