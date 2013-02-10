//

$( document ).ready(function() {

	// Keyboard Shortcuts (via keypress.js)
	keypress.counting_combo("meta f", function(event) {
		event.preventDefault();
		$(".search-query:text:visible:last").focus();
	});
	
	// Gesture Shortcuts (via hammer.js)
	
	// Start Fittext
	// for responsive width headlines just add class="fitText" to an element
	jQuery(".fitText").fitText();

});