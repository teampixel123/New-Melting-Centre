jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,

  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 3000,
  smartSpeed: 1500,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});

jQuery("#carousel2").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});


$('.section-one').hover(function() {
  $('.container').toggleClass('one-is-active');
});

$('.section-two').hover(function() {
  $('.container').toggleClass('two-is-active');
});

$('.scroll').click(function() {
  $('html, body').animate({
        scrollTop: $(".container").offset().top
    }, 800);
});

$(document).ready(function() {
  var service_box_width = $('#service_box').width();
  rem_width = service_box_width - 1100;
  req_width = rem_width/2;
  $('.service-box').css('margin-left', req_width+'px');
});
