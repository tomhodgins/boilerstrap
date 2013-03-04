// Custom site Javascript goes here

$( document ).ready(function() {

  // Initialize Keyboard Shortcuts (via keypress.js)
  keypress.counting_combo("meta f", function(event) {
    event.preventDefault();
    $(".search-query:text:visible:last").focus();
  });

  // Initialize Bootstrap's tooltips
  $('a[data-toggle=tooltip]').tooltip();
  $('a[data-toggle=tooltip-left]').tooltip({placement: 'left'});
  $('a[data-toggle=tooltip-right]').tooltip({placement: 'right'});
  $('a[data-toggle=tooltip-down]').tooltip({placement: 'bottom'});

  // Inititialize Bootstrap's popovers
  $("a[data-toggle=popover]").popover({html: 'true', placement: 'top'}).click(function(e) {e.preventDefault() });    
  $("a[data-toggle=popover-left]").popover({html: 'true', placement: 'left'}).click(function(e) {e.preventDefault() });
  $("a[data-toggle=popover-right]").popover({html: 'true', placement: 'right'}).click(function(e) {e.preventDefault() });
  $("a[data-toggle=popover-down]").popover({html: 'true', placement: 'bottom'}).click(function(e) {e.preventDefault() });
  
  // preventDefaul class
  $('.preventDefault').click(function(e) {
    e.preventDefault()
  });
  
});