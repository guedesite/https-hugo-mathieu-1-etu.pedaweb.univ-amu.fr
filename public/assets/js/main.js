	function makeCurrent(el) {
		for(let i = 0; i < el.parentElement.parentElement.children.length; i++) {
			el.parentElement.parentElement.children[i].classList = [];
		}
		el.parentElement.classList.add("current");
	
	}


 jQuery(document).ready(function($) {


	var els = document.querySelectorAll(".zoom-image");
	for(let i = 0; i < els.length; i++) {
		els[i].addEventListener("click", function() {
			document.getElementById("zoom-image-modal").style.display = "block";
			document.getElementById("zoom-image-close").style.display = "block";
			document.getElementById("zoom-image-modal-img").src = els[i].src;
		});
	}


/*----------------------------------------------------*/
/* FitText Settings
------------------------------------------------------ */

    setTimeout(function() {
	   $('h1.responsive-headline').fitText(1, { minFontSize: '40px', maxFontSize: '90px' });
	 }, 100);


/*----------------------------------------------------*/
/* Smooth Scrolling
------------------------------------------------------ */

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();
	    if(this.parentElement.parentElement.id == "nav") {
			makeCurrent(this);
		}
	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});



/*----------------------------------------------------*/
/*	Fade In/Out Primary Navigation
------------------------------------------------------*/

   $(window).on('scroll', function() {

		var h = $('header').height();
		var y = $(window).scrollTop();
      var nav = $('#nav-wrap');

	   if ( (y > h*.20) && (y < h) && ($(window).outerWidth() > 768 ) ) {
	      nav.fadeOut('fast');
	   }
      else {
         if (y < h*.20) {
            nav.removeClass('opaque').fadeIn('fast');
         }
         else {
            nav.addClass('opaque').fadeIn('fast');
         }
      }

	});



/*----------------------------------------------------*/
/*	Flexslider
/*----------------------------------------------------*/
   $('.flexslider').flexslider({
      namespace: "flex-",
      controlsContainer: ".flex-container",
      animation: 'slide',
      controlNav: true,
      directionNav: false,
      smoothHeight: true,
      slideshowSpeed: 7000,
      animationSpeed: 600,
      randomize: false,
   });

});


jQuery(function(){
                  jQuery("#bgndVideo").YTPlayer();
                  let filters = {
                      blur:5
                    }
                    jQuery("#bgndVideo").YTPApplyFilters(filters);
                });

function resetAnim() {
	document.querySelectorAll("animate").forEach(element => {
	    element.beginElement();
	  });
}



