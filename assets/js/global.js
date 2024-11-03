/* global twentyseventeenScreenReaderText */
(function( $ ) {
  $(document).ready(function(){
     AOS.init();
     
    if ($("#intro").length) {
      $(window).scroll(function() {
        var objectBottom = $("#intro").offset().top + $("#intro").outerHeight();
        var x = $(this).scrollTop();
        
        if (x > objectBottom) { 
          $(".header").removeClass("clear-background");
          if(!$(".header").hasClass("white-background")) $(".header").addClass("white-background");
          if($('.fixed-wpp-btn').hasClass('hide')) $('.fixed-wpp-btn').removeClass('hide');
        } else { 
          $(".header").removeClass("white-background");
          if(!$(".header").hasClass("clear-background")) $(".header").addClass("clear-background");
          if(!$('.fixed-wpp-btn').hasClass('hide')) $('.fixed-wpp-btn').addClass('hide');
        }
      }).scroll();
    }

    $('#faq-anchor').click(function(e) {
      window.location.replace(this.href);
      setTimeout(function() {
        console.log("scrolling to #faq");
        document.getElementById('faq').scrollIntoView();
      }, 100);
    });

    $(".owl-carousel.projects-pics").owlCarousel({
      margin: 10,
      autoplay: true,
      loop: true,
      autoplayTimeout: 3000,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
       
    $(".owl-carousel.statements").owlCarousel({
      margin: 30,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  });
})( jQuery );
