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


// $('.section-one').hover(function() {
//   $('.container').toggleClass('one-is-active');
// });
//
// $('.section-two').hover(function() {
//   $('.container').toggleClass('two-is-active');
// });

// $('.scroll').click(function() {
//   $('html, body').animate({
//         scrollTop: $(".container").offset().top
//     }, 800);
// });

// $(document).ready(function() {
//   var service_box_width = $('#service_box').width();
//   rem_width = service_box_width - 1100;
//   req_width = rem_width/2;
//   $('.service-box').css('margin-left', req_width+'px');
// });

$(document).ready(function() {
    var url = window.location.href;
    var activePage = url;
    $('li').removeClass('active');
    // alert(activePage);
    $('.top-nav a').each(function () {
        var linkPage = this.href;
        if (activePage == linkPage) {
            $(this).closest("li").addClass("active");
        }
    });
});

document.onreadystatechange = function () {
var state = document.readyState
if (state == 'interactive') {
     document.getElementById('contents').style.visibility="hidden";
} else if (state == 'complete') {
    setTimeout(function(){
       document.getElementById('interactive');
       document.getElementById('load').style.visibility="hidden";
       document.getElementById('contents').style.visibility="visible";
    },300);
}
}


$(document).scroll(function() {
  go_top();
});
// Show go top on scroll
function go_top(){
  if( $(document).scrollTop() > 200 ) {
    $('#go-top').fadeIn();
  } else {
    $('#go-top').fadeOut();
  }
}

// Go to top..
$('#go-top').on( "click", function() {
    $('html, body').animate({scrollTop: 0});
    return false;
});



$(document).ready(function() {
			// grab the initial top offset of the navigation
		   	var stickyNavTop = $('.stick').offset().top;

		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
          var width = $(document).width();
          var rem = width-1100;
          var left = rem/2;
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) {
			        $('.stick').addClass('sticky');
              $('.stick').css("left", +left);
			    } else {
			        $('.stick').removeClass('sticky');
              $('.stick').css("left", 0);
			    }
			};

			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});
		});
