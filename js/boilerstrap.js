//

$( document ).ready(function() {

	// Keyboard Shortcuts (via keypress.js)
	keypress.counting_combo("meta f", function(event) {
		event.preventDefault();
		$(".search-query:text:visible:last").focus();
	});
	
	// Gesture Shortcuts (via hammer.js)
	
	// Start bigtext
	// for responsive width headlines just add class="bigtext" to an element
	$('.bigtext').bigtext();

});