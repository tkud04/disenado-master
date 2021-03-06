// Smooth scroll blocking
document.addEventListener( 'DOMContentLoaded', function() {
	if ( 'onwheel' in document ) {
		window.onwheel = function( event ) {
			if( typeof( this.RDSmoothScroll ) !== undefined ) {
				try { window.removeEventListener( 'DOMMouseScroll', this.RDSmoothScroll.prototype.onWheel ); } catch( error ) {}
				event.stopPropagation();
			}
		};
	} else if ( 'onmousewheel' in document ) {
		window.onmousewheel= function( event ) {
			if( typeof( this.RDSmoothScroll ) !== undefined ) {
				try { window.removeEventListener( 'onmousewheel', this.RDSmoothScroll.prototype.onWheel ); } catch( error ) {}
				event.stopPropagation();
			}
		};
	}

	try { $('body').unmousewheel(); } catch( error ) {}
});
function include(url){
  document.write('<script src="'+url+'"></script>');
  return false ;
}


/* DEVICE.JS
========================================================*/
include('js/device.min.js');


/* Easing library
========================================================*/
include('js/jquery.easing.1.3.js');

/* menu
========================================================*/
include('js/jquery.mousewheel.min.js');
include('js/smoothing-scroll.js');

$(window).load(function() {
  var
    menuSelector = $('.menu')
  , asideMenuSelector = $('.aside-menu')
  , offsetArray = []
  , offsetValueArray = []
  , _document = $(document)
  , currHash = ''
  , isAnim = false
  , isHomePage = $('body').hasClass('home')? true:false
  ;
  
  //--------------------------- Menu navigation ---------------------------

  getPageOffset();
  function getPageOffset(){
    offsetArray = [];
    offsetValueArray = [];
    $('.hashAncor').each(function(){
      var _item = new Object();
      _item.hashVal = "#"+$(this).attr('id');
      _item.offsetVal = $(this).offset().top;
      offsetArray.push(_item);
      offsetValueArray.push(_item.offsetVal);
    })
  }

  function offsetListener(scrollTopValue, anim){
    if(isHomePage){

      scrolledValue = scrollTopValue;
      var nearIndex = 0;

      nearIndex = findNearIndex(offsetValueArray, scrolledValue)
      currHash = offsetArray[nearIndex].hashVal;

      if(window.location.hash != currHash){
        if(anim){
          isAnim = true;
          $('html, body').stop().animate({'scrollTop':scrolledValue}, 1500, function(){
            isAnim = false;
            window.location.hash = currHash;
            $('html, body').stop().animate({'scrollTop':scrolledValue},0);
            return false;
          });
        }else{
          window.location.hash = currHash;
          $('html, body').stop().animate({'scrollTop':scrolledValue},0);
          return false;
        }
      }
    }
  }

  function findNearIndex(array, targetNumber){
    var
      currDelta
    , nearDelta
    , nearIndex = -1
    , i = array.length
    ;

    while (i--){
      currDelta = Math.abs( targetNumber - array[i] );
      if( nearIndex < 0 || currDelta < nearDelta )
        {
          nearIndex = i;
          nearDelta = currDelta;
        }
    }
    return nearIndex;
  }

  $(window).on('mousedown',function(){
    isAnim = true;
  })
  $(window).on('mouseup',function(){
    isAnim = false;
    offsetListener(_document.scrollTop(), false);
  })

  $(window).on('mousewheel', function(event){
    offsetListener(_document.scrollTop(), false);
  })
  $(window).on('resize', function(){
    getPageOffset();
  })

  $('> li a[href^="#"]', menuSelector).on('click',function (e) {
    e.preventDefault();
    
    var target = this.hash,
    $target = $(target);
    offsetListener($target.offset().top, true);
    return false;
  });
  $('> li a[href^="#"]', asideMenuSelector).on('click',function (e) {
    e.preventDefault();

    var target = this.hash,
    $target = $(target);
    offsetListener($target.offset().top, true);
    return false;
  });
  

  $(window).on('hashchange', function() {
    var
      target = window.location.hash ? window.location.hash : offsetArray[0].hashVal;

      $('.active-menu-item').removeClass('active-menu-item');
      $('> li a[href="' + target + '"]', menuSelector).parent().addClass('active-menu-item');
      $('> li a[href="' + target + '"]', asideMenuSelector).parent().addClass('active-menu-item');
  }).trigger('hashchange');

})

/* Stellar.js
========================================================*/
include('js/stellar/jquery.stellar.js');
$(window).load(function() { 
  if ($('html').hasClass('desktop')) {
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: -50
      });
  }  
});


/* TOOGLE
========================================================*/


$(window).load(function(){    
  var 
    asideState = 'closed'
  , tabletState = true
  ;

  $(".navbar-toggle").on('click',function(){
    asideState = 'opened'
    asideSwitcher('opened');
  })

  $(".remove-panel").on('click', function(){
    asideState = 'closed'
    asideSwitcher('closed');
  })

  function asideSwitcher(state){
    switch(state){
      case 'opened':
        if(!tabletState){
          $(".aside-panel").stop().animate({left:"60"},400);
        }else{
          $(".aside-panel").stop().animate({left:"0"},400);
        }
      break;
      case 'closed':
        $(".aside-panel").stop().animate({left:"-290"}, 400);
      break;
    }
  }

  $(window).resize(function(){     
    if ( $(window).width() < 767) {
      tabletState = true;
      asideSwitcher(asideState);
    }else{
      tabletState = false;
      if(asideState=='opened'){
        $(".aside-panel").stop().animate({left:"60"},400);
      }
    }
  }).trigger('resize');


  var $spinner = $('.content-load-spinner');
  setTimeout(function(){
      $spinner.fadeOut(600);
  }, 700);
})


/* OWL Carousel
========================================================*/
include('js/owl.carousel.min.js');
$(document).ready(function() { 
  var owl = $("#owl"); 
  var owlc = $("#owl-contact"); 
  var owlt = $(".team-list"); 
  owl.owlCarousel({
    autoPlay: false,
    items : 2, //10 items above 1000px browser width
    itemsDesktop : [1000,2], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,2], // betweem 900px and 601px
    itemsTablet: [767,1], //2 items between 600 and 0
    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
    pagination: true
  }); 
  owlc.owlCarousel({
    autoPlay: false,
    items : 1, //10 items above 1000px browser width
    itemsDesktop : [1000,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,1], // betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0
    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
    pagination: true,
    mouseDrag : false
  }); 

  owlt.owlCarousel({
    autoPlay: false,
    items : 6, //10 items above 1000px browser width
    itemsDesktop : [1500,5], //5 items between 1000px and 901px
    itemsDesktopSmall : [1199,4], // betweem 900px and 601px
    itemsTablet: [979,2], //2 items between 600 and 0
    itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
    pagination: false,
    mouseDrag : true,
    navigation:true
  }); 
});




/* Video library
========================================================*/
include('js/jquery.vide.js');
$(document).ready(function () {
  $("#home").vide("video/video",{
    volume: 1,
    playbackRate: 1,
    muted: true,
    loop: true,
    autoplay: true,
    position: "50% 50%" // Alignment
  });
  $('#home video').fadeOut(0).delay(200).fadeIn(800);

  $("#privacy").vide("video/video",{
    volume: 1,
    playbackRate: 1,
    muted: true,
    loop: true,
    autoplay: true,
    position: "50% 50%" // Alignment
  });
  $('#privacy video').fadeOut(0).delay(200).fadeIn(800);
});

/* Touchtouch library
========================================================*/
include('js/touchTouch.jquery.js');
$(window).load(function () {       
  $('.zoom').touchTouch();
});


/* Count To
========================================================*/
include('js/scrollShowTime.js');
include('js/green/TimelineMax.min.js');
include('js/green/TweenMax.min.js');


function countT(){
  $(".skill-number").each(function(){
    var $text = $(this),
        $from  = $text.data('from'),
        $to  = $text.data('to'),
        $speed = $text.data('speed'),
        currVal = 0,
        endVal = 0,
        obj   = {};


    obj.getTextVal = function() {
      return $from;
    };

    obj.setTextVal = function(val) {
      currVal = parseInt(val, 10);
      $text.text(currVal);
    };

    obj.setTextVal($from);

    var animate = function() {
      
      currVal = obj.getTextVal();
      endVal = $to;
      TweenLite.to(obj, $speed, {setTextVal: endVal, ease: Power2.ease});
    };
    animate();
  });
};

$(window).load(function(){
  if ($('html').hasClass('desktop')) {
            $('#statistics').scrollShowTime({onShow: countT})           
      }else{
        countT();
      } 
})

/* Isotope
========================================================*/
include('js/isotope/isotope.pkgd.min.js');


$(document).ready(function() {  
  var $container = $('.folio-block');
  //Run to initialise column sizes
  updateSize();

  //Load masonry when images all loaded
  $container.init( function(){

      $container.isotope({
          // options
          itemSelector : '.folio-thumb',  
          layoutMode: 'masonry',
          transformsEnabled: false,
          columnWidth: function( containerWidth ) {
              containerWidth = $browserWidth;
            }
      });
  });
    
    // update columnWidth on window resize
  $(window).smartresize(function(){  
      updateSize();
  });

  
  //Set item size
  function updateSize() {
    $browserWidth = $container.width();
    $cols = 3;


    if ($browserWidth >= 767 && $browserWidth < 995) {
        $cols = 3;
    }
    else if ($browserWidth >= 479 && $browserWidth < 767) {
        $cols = 2;
    }
    else if ($browserWidth < 479) {
        $cols = 2;
    }

    $browserWidth = $browserWidth; // - $gutterTotal;
    $itemWidth = $browserWidth / $cols;
    $itemWidth = Math.floor($itemWidth);

    $(".folio-thumb").each(function(index){
        $(this).css({"width":$itemWidth+"px"});             
    });
         
    var $optionSets = $('.isotope-list'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
      var $this = $(this);
      // don't proceed if already selected
      if ( $this.hasClass('active') ) {
        return false;
      }
      var $optionSet = $this.parents('.isotope-list');

      $optionSet.find('.active').removeClass('active');
      $this.addClass('active');

      // make option object dynamically, i.e. { filter: '.my-filter-class' }
      var options = {},
          key = $optionSet.attr('data-option-key'),
          value = $this.attr('data-filter');
      // parse 'false' as false boolean
          value = value === 'false' ? false : value;
          options[ key ] = value;
      if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
        // changes in layout modes need extra logic
        changeLayoutMode( $this, options )
      } else {
        // otherwise, apply new options
        $container.isotope( options );
      }
      
      return false;
    });   
    
  };
      
});

      
function folioanimate(){
      TweenLite.to('.anim', 1, {delay:1, scale:1, ease: Power2.ease});
  };

$(window).load(function(){  
  if ($('html').hasClass('desktop')) {        
            TweenLite.to('.anim', 0.1, {delay:0, scale:0, ease: Power2.ease});
            $('#folio').scrollShowTime({onShow: folioanimate})          
      }else{
        folioanimate();
      } 
})


/* Wow js
========================================================*/
include('js/wow/wow.min.js');
$(window).load(function () {       
  if ($('html').hasClass('desktop')) {
    new WOW().init();
  }   
});




/* ToTop
========================================================*/
include('js/jquery.ui.totop.js');
$(function () {   
  $().UItoTop({ easingType: 'easeOutQuart' });
});


/* Contact Form
========================================================*/
include('js/TMForm.js');
include('js/modal.js');


/* Copyright Year
========================================================*/
var currentYear = (new Date).getFullYear();
$(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
});


/* Orientation tablet fix
========================================================*/
$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,

	gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	
	scaleFix();
	// Menu Android
	if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')