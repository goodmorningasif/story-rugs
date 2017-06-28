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
    console.log('lazy loading invoked')
    // initial invocation of lazy.js
    matchPosition(injectClass('load'));

    // add scroll event listener
	  $j(window).scroll(function(){
	  	windowTop = $j(window).scrollTop();
      store = getLazyElements();
      
      // invoke lazy.js while scrolling
      matchPosition(injectClass('load'));

	  });
  }
  
  // if page has portfolio class
  if ($j('.portfolio')) {
  	//invoke imageLoop
    imageLoop(5000, 0);
  }

  // gallery navigation
  $j('.circle').on('click', function(){
    handleGalleryClick(this);
  });
  
  // handle back-to-top click
	$j('#btt').on('click', function(){
    console.log('click btt');
    $j('html, body').animate({scrollTop: 0}, 1000);
  });

  // handle form submission TEMP
  $j('form').on('submit', function(e){
    e.preventDefault();
    $j(this).fadeOut(500,function(){
      $j(this).parent().append('<div class="confirmation"><h3>Thank you for your submission</h3><div>');
    });
  })
  
  // if single-product, handle sticky product description
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


});