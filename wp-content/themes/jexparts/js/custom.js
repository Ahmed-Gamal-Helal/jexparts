jQuery( function($) {
'use strict';

/* loader */
$(window).on('load',function()
{
// show the scroll
$("#preloader").fadeOut(2000)

});



/* slider */
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false,
    autoplay: {
      delay: 5000,
    },
     stoponhover: true,

     pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  
  $(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});


/* star Wow */
new WOW().init();

/* back to top */
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


/* menu */

$('.icon_menu').click(function(){
  $('.hid-mobile').toggleClass('left-mar');
});


var winH =$(window).height(), 
  upperH = $('header').innerHeight();
  $('.slider,.imgslider').height(winH);





}); /* end js*/