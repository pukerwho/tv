$('.mobile-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('mobile-menu__active');
  $('.mobile-cover').toggleClass('mobile-cover__open');
  $('body').toggleClass('modal-open');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

//Плавный скролл
$(document).on('click', '.header nav a[href^="#"]', function (event) {
  event.preventDefault();
  var target = $($.attr(this, 'href'));
  var targetScroll =  target.offset().top;
  $('html, body').animate({
      scrollTop: targetScroll
  }, 500);
});


if ($('.welcome .slider').length > 0) {
  var headerHeight = $('.header').outerHeight();
  console.log(headerHeight);
  $('.welcome .slider__item').css({'height':'calc( 100vh - '+ headerHeight + 'px)'})
}

//SWIPER 
var swiperWelcomeSlider = function() {
  if ($(document).width() > 760) {
    var swiperWelcome = new Swiper('.swiper-welcome-container', {
      slidesPerView: 1,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 4000,
      },
      loop: true,
      pagination: {
        el: '.swiper-welcome-pagination',
      },
    })
  } else {
    var swiperWelcome = new Swiper('.swiper-welcome-container', {
      slidesPerView: 1,
      centeredSlides: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 4000,
      },
      loop: true,
      pagination: {
        el: '.swiper-welcome-pagination',
      },
    })
  }
}

swiperWelcomeSlider();