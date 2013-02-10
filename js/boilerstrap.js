//

$( document ).ready(function() {

	// Keyboard Shortcuts (via keypress.js)
	keypress.counting_combo("meta f", function(event) {
		event.preventDefault();
		$(".search-query:text:visible:last").focus();
	});
	
	// Gesture Shortcuts (via hammer.js)

});