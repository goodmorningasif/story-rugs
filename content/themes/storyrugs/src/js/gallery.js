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
  var lastIndex = index - 1;
	if (index === totalImages) {
		index = 0;
		lastIndex = totalImages;
	}

	if(!reset) {

		$j('.image').removeClass('load');
		$j('.image-'+index).addClass('load');
		$j('.circle').removeClass('circle-active');
		$j('.circle-'+index).addClass('circle-active');

		index++;

		setTimeout(function(){
		  imageLoop(interval, index);	
		}, interval);
	}
}

/* 
* 
* handleGalleryClick
*
* Moves gallery to image selected
*
*/

function handleGalleryClick (thisEl) {
    reset = true;
    var currentEl = $j(thisEl).attr('id');
    var currentId = currentEl.split('-').pop();

    $j('.image').removeClass('load');
    $j('.image-'+currentId).addClass('load');
    $j('.circle').removeClass('circle-active');
    $j('.circle-'+currentId).addClass('circle-active');

    setTimeout(function(){
      reset = false;
    }, 5000);

    setTimeout(function(){
      imageLoop(5000, currentId);
    }, 7000);

}

