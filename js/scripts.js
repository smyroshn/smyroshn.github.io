/**
 prettyPhoto
 */
$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});


/**
 Tweet Activation
 */
    $(document).ready(function(){
        $(".tweet").tweet({
        });
    });


/** 
jQuery.ScrollTo Activation 
*/
$(document).ready(function(){
$('#go-top').click(function() {
$.scrollTo(0, 800); });
});