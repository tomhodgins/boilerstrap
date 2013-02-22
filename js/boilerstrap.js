//

$( document ).ready(function() {

	// Keyboard Shortcuts (via keypress.js)
	keypress.counting_combo("meta f", function(event) {
		event.preventDefault();
		$(".search-query:text:visible:last").focus();
	});
	
	// Gesture Shortcuts (via hammer.js)
	// coming soon…
	
	// Initialize Bootstrap's tooltips
	$('a[data-toggle=tooltip]').tooltip()
	$('a[data-toggle=tooltip-left]').tooltip({placement: 'left'})
	$('a[data-toggle=tooltip-right]').tooltip({placement: 'right'})
	$('a[data-toggle=tooltip-down]').tooltip({placement: 'bottom'})
		
    // Inititialize Bootstrap's popovers
    $("a[data-toggle=popover]").popover({html: 'true', placement: 'top'}).click(function(e) {e.preventDefault(); });    
    $("a[data-toggle=popover-left]").popover({html: 'true', placement: 'left'}).click(function(e) {e.preventDefault(); });
    $("a[data-toggle=popover-right]").popover({html: 'true', placement: 'right'}).click(function(e) {e.preventDefault(); });
    $("a[data-toggle=popover-down]").popover({html: 'true', placement: 'bottom'}).click(function(e) {e.preventDefault(); });
    
    // iWebkit support for offline apps on Mobile
    var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName("a");for(var i=0;i<a.length;i++){if(a[i].className.match("noeffect")){}else{a[i].onclick=function(){window.location=this.getAttribute("href");return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}

});