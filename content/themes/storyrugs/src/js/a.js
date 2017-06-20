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

$j(document).ready(function(){

	// invoke widont
	widont();

	// store lazy elements
	store = getLazyElements();

  // if store, invoke lazy elements
  if (store.length) {

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

  if ($j('.portfolio')) {
  	//invoke imageLoop
    imageLoop(5000, 0);
  }
	
});