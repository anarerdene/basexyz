jQuery(document).ready( function($) {
	var ppp = js_globals.post_count; // Post per page
	var cat = js_globals.cat_id; // Category ID
	var pageNumber = 1;

	function load_posts(){
	    pageNumber++;
	    var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
	    $.ajax({
	        type: "POST",
	        dataType: "html",
	        url: js_globals.ajaxurl,
	        data: str,
	        success: function(data){
	            var $data = $(data);
	            if($data.length){
	                $("#post-list").append($data);
	                $("#more_posts").attr("disabled",false);
	            } else{
	                $("#more_posts").attr("disabled",true).html(js_globals.noposts);
	            }
	        },
	        error : function(jqXHR, textStatus, errorThrown) {
	            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
	        }

	    });
	    return false;
	}

	$("#more_posts").on("click",function(){ // When btn is pressed.
	    $("#more_posts").attr("disabled",true); // Disable the button, temp.
	    load_posts();
	});

});