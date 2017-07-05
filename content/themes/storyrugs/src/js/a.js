/**
*
* A is for Airplane
*
*/ 

var $j = jQuery.noConflict();
var windowTop = $j(window).scrollTop();
var windowHeight = $j(window).height();
var footerTop = $j('.back-to-top').offset().top
var i = 0;
var store;
var currentEl;
var totalImages;
var reset = false;


$j(document).ready(function(){

	// invoke widont
	widont();
  
  // store lazy elements
   store = getLazyElements('.lazy');

  // invoke lazy.js to logo
  setTimeout(function(){
    addMyClass('.lazy-logo', 'load')}, 500);

  // invoke lazy.js to cart
  setTimeout(function(){
    addMyClass('.lazy-cart', 'load')}, 1000);

  // invoke lazy.js to footer
  setTimeout(function(){
    addMyClass('.lazy-footer', 'load')}, 1500);

  if (footerTop < windowHeight) {
    addMyClass('.back-to-top', 'hide');
  }

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
      store = getLazyElements('.lazy');
      
      // invoke lazy.js one element at a time
      matchPosition(function(){
        addMyClass('#lazyEl-' + i, 'load');
      });

	  });
  }


  // if page has archive class
  if($j('body').hasClass('archive')) {
    // invoke lazy.js to logo
    addMyClass('.lazy-products', 'load')
  }

    // if page has single-product class
  if($j('body').hasClass('single-product')) {
    // invoke lazy.js to logo
    addMyClass('.lazy-bg', 'load');
    setTimeout(function(){
      addMyClass('.lazy-images', 'load')}, 1500);
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
  document.addEventListener('wpcf7mailsent', function(){
    $j('#purchase-form-overlay').addClass('overlay-toggle');
  });




});