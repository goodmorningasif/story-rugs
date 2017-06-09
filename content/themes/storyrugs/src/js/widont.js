/**
*
* widont
*
* Methods for checking if text has widow then replacing 
* with non-breaking space character.
* see https://css-tricks.com/preventing-widows-in-post-titles/
*
*/

function widont(selector){
	selector = selector || '.widont'
	$j(selector).each(function(){
	  var originalText = $j(this).text();
	  var wordArray = originalText.split(" ");
	  if (wordArray.length > 1) {
	  	// removes white space as last character
		  if(/^\s*$/.test(wordArray[wordArray.length-1])) {
		  	wordArray.pop();
		  }
	  	wordArray[wordArray.length-2] += "&nbsp" + wordArray[wordArray.length-1];
	  	wordArray.pop();
	  	$j(this).html(wordArray.join(" "));
	  }
	  
	});
}