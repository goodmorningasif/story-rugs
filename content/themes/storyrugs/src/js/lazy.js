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

function getLazyElements(){
	// define vocab
	var store = [];
  var row;
  // 
  var adjustment = windowHeight/5;

  // loop through lazy elements
	$j('.lazy').each(function(index, value){
		row = {};
		var className = value.className.split(" ");
		row.class = className[0];
		row.top = $j(value).offset().top - adjustment; 
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

function matchPosition(callback){
	if(store[i]){
		if (windowTop > store[i].top) {
  		callback;
  		i++;
  	}
  }
}


/* 
* 
* injectClass
*
* injects class into current element
*
*/

function injectClass(elClass){
	$j('#lazyEl-' + i).addClass(elClass);

}