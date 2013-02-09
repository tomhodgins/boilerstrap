//

$( document ).ready(function() {


keypress.counting_combo("meta f", function(event) {
event.preventDefault();
$(".search-query:text:visible:last").focus();
});

});