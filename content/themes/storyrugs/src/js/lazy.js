/**
*
* lazy.js
*
* Methods for lazy loading content
*
*/

/* 
* 
* Finds all lazy Elements and returns an array 
* of element data 
*/
function getLazyElements(){
	// define vocab
	var store = [];
	var row = {};

  // loop through lazy elements
	$j('.lazy').each(function(index, value){
		$j(value).addClass('load');

    console.log('index, ', index, 'value: ', value.className);
	});

	return store;
}