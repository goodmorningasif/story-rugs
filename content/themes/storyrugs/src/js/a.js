/**
*
* A is for Airplane
*
*/ 

var $j = jQuery.noConflict();
var windowTop = $j(window).scrollTop();
var windowHeight = $j(window).height();
var i = 0;
var store;
var currentEl;
var totalImages;
var reset = false;


$j(document).ready(function(){

	// invoke widont
	widont();
  

	// store lazy elements
	store = getLazyElements();

  // if store, invoke lazy elements
  if (store.length) {

    // if window is below browser height, invoke lazy.js on all elements
    if (windowTop >= windowHeight) {
      addMyClass('.lazy', 'load')
      i = store.length -1;

    // else invoek lazy.js on first lazy element
    } else {
      addMyClass('#lazyEl-' + i, 'load');
      i++;
    }

    // add scroll event listener
	  $j(window).scroll(function(){
	  	windowTop = $j(window).scrollTop();
      store = getLazyElements();
      
      // invoke lazy.js one element at a time
      matchPosition(function(){
        addMyClass('#lazyEl-' + i, 'load');
      });

	  });
  }
  
  // if page has portfolio class, invoke image loop
  if ($j('.portfolio')) {
    imageLoop(5000, 0);
  }

  // gallery navigation
  $j('.circle').on('click', function(){
    handleGalleryClick(this);
  });
  
  // handle back-to-top click
	$j('#btt').on('click', function(){3
    $j('html, body').animate({scrollTop: 0}, 1000);
  });

  // handle form submission 
  $j('#p_submit').on('submit', function(e){
    if($j('.wpcf7-response-output').hasClass('wpcf7-mail-sent-ok')){
      console.log('triggered on mail sent ok')
      $j('#purchase-form-overlay').addClass('overlay-toggler');
    }
  });

  // $j('.newsletter-form').on('submit', function(e){
  //   e.preventDefault();
  //   $j(this).fadeOut(500,function(){
  //     $j(this).parent().append('<div class="confirmation"><h3>Thank you for your submission</h3><div>');
  //   });
  // });
  
  // if single-product, handle sticky product description
  /*
  if ($j('body').hasClass('single-product') ) {
    var navBottom = $j('nav').height(); 
    // add scroll event listner
    $j(window).scroll(function(){
      windowTop = $j(window).scrollTop();

      if(windowTop > navBottom) {
        $j('.content-floater').addClass('zero-top');
        console.log('true');
      } else {
        $j('.content-floater').removeClass('zero-top');
      }

    }); 
  }
  */


});