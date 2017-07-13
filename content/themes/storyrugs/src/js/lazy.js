/**
*
* lazy.js
*
* Methods for lazy loading content
*
*/


/* 
* 
* getLazyElements
*
* Finds all lazy Elements and returns an array 
* of element data 
*
*/

function getLazyElements(lazyEl){
	// define vocab
	var store = [];
  var row;

  // loop through lazy elements
	$j(lazyEl).each(function(index, value){
		row = {}; 
		var className = value.className.split(" ");
		row.class = className[0];
		row.top = $j(value).offset().top; 
		row.toggle = false;
    
    $j(value).attr('id', 'lazyEl-' + index);
    store.push(row);
	});

	return store;
}


/* 
* 
* matchPosition
*
* tests to see if global elements meet 
* requirements, executes function if so
*
*/

function matchPosition(height, callback){
	if(store[i]){
		if (height > store[i].top) {
  		callback();
  		i++;
  	}
  }
}


/* 
* 
* addMyClass
*
* injects class into current element
*
*/

function addMyClass(currentEl, addClass){
	$j(currentEl).addClass(addClass);
}
