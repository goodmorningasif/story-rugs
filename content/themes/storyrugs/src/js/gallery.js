/**
*
* gallery.js
*
* Methods for gallery scroller
*
*/

/* 
* 
* imageLoop
*
* Recursive function loops thru images
*
*/

function imageLoop(interval, index) {
  totalImages = $j('.image').length;
	if (index === totalImages) {
		index = 0;
	}
	console.log()
	$j('.image').removeClass('load');
	$j('.image-'+index).addClass('load');
	index++;

	setInterval(function(){
	  imageLoop(interval, index);	
	}, interval);

}