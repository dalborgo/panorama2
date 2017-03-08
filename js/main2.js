(function ($) {
	"use strict";


jQuery(document).ready(function($){
	
	// showcase slider
	$('.showcase_slider').owlCarousel({
        loop:true,
        autoHeight: true,
        autoplay: true,
        nav: false,
        margin:0,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    });

	//bootstrap carousel
	$('.carousel').carousel({
	    pause: true,
	    interval: 2000
	});

	// start vertical lightslider
	$('#vertical').lightSlider({
      gallery:true,
      item:1,
      vertical:true,
      verticalHeight:320,
      vThumbWidth:100,
      thumbItem:4,
      thumbMargin:15,
      enableDrag: true,
      slideMargin:0
    });

	// end vertical lightslider


	// start normal lightslider
	$('#image-gallery').lightSlider({
	      gallery:true,
	      item:1,
	      thumbItem:6,
	      slideMargin: 0,
	      thumbMargin:24,
	      verticalHeight:600,
	    	vThumbWidth:100,
	      speed:500,
	      auto:true,
	      loop:true,
	      onSliderLoad: function() {
	          $('#image-gallery').removeClass('cS-hidden');
	      }
	  });
	// end normal lightslider

    $('a.smooth-scroll[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 600);
        }

    });

    /* --------------------------------------------
     JS NOT FOR MOBILE (PARALLAX, OPACITY SCROLL)
     --------------------------------------------- */
    if( mobileDetect == false ) {
        /* --------------------------------------------
         OPACITY SCROLL
         --------------------------------------------- */
        if ( $('.opacity-scroll2').length ){
            windowT.on('scroll', function() {
                $('.opacity-scroll2').css('opacity', function() {
                    return 1 - ((windowT.scrollTop() / windowT.height())*1.5);
                });
            });
        };

        /* --------------------------------------------
         PARALLAX
         --------------------------------------------- */
        if ( $('.parallax-section').length ){
            $.stellar({
                horizontalScrolling: false,
            });
        };

    }//END JS NOT FOR MOBILE
	

})
	
	/** start prelaoder js **/

	$(window).load(function() { // makes sure the whole site is loaded
		$('#status').fadeOut(); // will first fade out the loading animation
		$('#loader-wrapper').delay(300).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(350).css({'overflow-x':'hidden'});
	})

	/** end prelaoder js **/

}(jQuery));


/* --------------------------------------------
  PLATFORM DETECT
--------------------------------------------- */

var htmlT    = $('html'),
    windowT    = $(window),
    ieDetect = false,
    mobileDetect = false,
    ua = window.navigator.userAgent,
    old_ie = ua.indexOf('MSIE '),
    new_ie = ua.indexOf('Trident/');
  
  if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)) {
    mobileDetect = true;
    htmlT.addClass('mobile');
  } else {
    htmlT.addClass('no-mobile');
  };   
  
  //IE Detect
  if ((old_ie > -1) || (new_ie > -1)) {
    ieDetect = true;
  };
  