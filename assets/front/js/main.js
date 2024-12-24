// JavaScript Document

var $ = jQuery.noConflict();

/*##################### CAMERA BANNER ############################*/

jQuery(function(){			
	jQuery('#slider').camera({
		height: '42%',
		loader: 'bar',
		pagination: false,
		thumbnails: false,
		hover: false,
		opacityOnGrid: false,
		imagePath: ''
	});	
});

/*##################### End CAMERA BANNER ############################*/

/*---------------------------------------------------
    Language and Currency Dropdowns
----------------------------------------------------- */	

	
$('#language').hover(function() {
  $(this).find('ul').stop(true, true).slideDown('fast');
},function() {
  $(this).find('ul').stop(true, true).css('display', 'none');
}); 

/*************************** Owl Carousel ****************************/
 			
$(document).ready(function() {
	
  $("#pro-carousel, #pro-carousel2, #pro-carousel3").owlCarousel({
    autoplay: false,
    loop: true,
    items : 4, 
    navText: false,
    dots: false,       
    nav : true,
    mouseDrag:true,
    lazyLoad : false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:3
        },
        1000:{
            items:4
        }
    }
      });

  $("#testi-carousel").owlCarousel({
    autoplay: true,
    items : 3, 
    loop: true,
    navText: false,
    dots: false,       
    nav : true,
    mouseDrag:true,
    lazyLoad : false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
      });

  $("#comp-carousel").owlCarousel({
    autoplay: true,
    items : 5, 
    navText: false,
    loop: true,
    dots: false,       
    nav : true,
    mouseDrag:true,
    lazyLoad : false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        800:{
            items:4
        },
        1000:{
            items:5
        }
    }
      });
			            
});

$(document).ready(function () {
	
	$('#horizontalTab').easyResponsiveTabs({
    type: 'default',         
    width: 'auto',
    fit: true,  
    closed: 'accordion', 
    activate: function(event) {
    var $tab = $(this);
    var $info = $('#tabInfo');
    var $name = $('span', $info);
    $name.text($tab.text());
    $info.show();
    }
	});

});

$(document).ready(function() {
  
      // FANCY BOX ( LIVE BOX) WITH MEDIA SUPPORT
      $('[data-fancybox="images"]').fancybox({
		  buttons : [ 
			'slideShow',
			'share',
			'zoom',
			'fullScreen',
			'close'
		  ],
		  thumbs : {
			autoStart : false
		  }
		});

    // $( ".socialCircle-center" ).socialCircle({
    //     rotate: -17,
    //     radius: 80,
    //     circleSize: 1.5,
    //     speed:500
    // });
  
}); 

$(document).ready(function () {
	
	$(".product-bx a").click(function(){
        $(this).siblings(".share-social").toggleClass("d-none");
    });

    $('.quantity-lst li').on("click", function() {
        $(this).addClass("active");
        $(this).siblings(".quantity-lst li").removeClass("active");
    });

});

// Product Slider

$(document).ready( function () {
    $('#glasscase').glassCase({ 
         'thumbsPosition': 'bottom', 
        'widthDisplayPerc' : 100,
        isDownloadEnabled: false,
    });
  });

  
  
  
  
  
  
  
  