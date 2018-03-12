$( document ).ready(function() {
    $(".main-banner .carousel-inner .item:first").addClass("active");
    $(".green-initiative .carousel-inner .item:first").addClass("active");
    $(".launch-exxcitment .carousel-inner .item:first").addClass("active");
    $(".post-slider .carousel-inner .item:first").addClass("active");
    $(".complete-project .carousel-inner .item:first").addClass("active");
    $('#menu-item-22 a').click(function (event) {
	 event.preventDefault();
	$('html, body').animate({scrollTop: $('.contact').offset().top},1000);
    });
    $('#menu-item-144 a').click(function (event) {
	 event.preventDefault();
	$('html, body').animate({scrollTop: $('.contact').offset().top},200);
    });
      $('#myCarousel').carousel({
        interval: 4000
    });
    $("#menu-item-349").removeClass("active");
    $("#menu-item-470").removeClass("active");
    $('.complete-project .carousel .item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
    });
    function footer_banner_height(selector){
        var wnd_widht = $( window ).width();
        var req_height = 44.2;
        var calculate_height = (wnd_widht / 100) * req_height;
	 
        $(selector).height(calculate_height);
    }
    footer_banner_height('.main-banner');
    $( window ).resize(function() {
    footer_banner_height('.main-banner');

   });
    function footer_banner_height(selector){
     var wnd_widht = $( window ).width();
     var req_height = 44.2;
     var calculate_height = (wnd_widht / 100) * req_height;
	 
     $(selector).height(calculate_height);
    }
    footer_banner_height('.main-banner .item');
    $( window ).resize(function() {
      footer_banner_height('.main-banner .item');

     });
    function footer_banner_height(selector){
     var wnd_widht = $( window ).width();
     var req_height = 28.2;
     var calculate_height = (wnd_widht / 100) * req_height;
	 
     $(selector).height(calculate_height);
     //$('.banner-menu').html(calculate_height);
    //alert(calculate_height);  
    }
    footer_banner_height('.inner-banner ');
    $( window ).resize(function() {
      footer_banner_height('.inner-banner');

     });
    $(".packages ").mouseover(function(){
            $(".packages").removeClass("active");
    });
    $('.location').bind("click", function() {
        window.location = $(this).data('location');
    });
    /********Scroll Function****************/
    if ($('.sticky-header').length >= 1) {
  $(window).scroll(function() {
    var header = $(document).scrollTop();
    var headerHeight = $('.header-wrapper').height();
    if (header > headerHeight) {
      $('.sticky-header').addClass('sticky');
      $('.sticky-header').fadeIn();
    } else {
      $('.sticky-header').removeClass('sticky');
    }
  });
}
});

$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.test-img').fadeIn();
        } else {
            $('.test-img').fadeOut();
        }
    });

    $('.test-img').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
	 