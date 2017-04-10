// Main Setup
jQuery(document).ready( function($) {

	// If Admin bar enabled
	if ( $( 'body' ).hasClass('admin-bar') ) {
		var $toolbarOffset = $('#wpadminbar').height();
		$('#header').css('top', $toolbarOffset);
	}
	
	// Absolute Header Offset
    var $height = $("#header").outerHeight();
	$('#wrapper').css('margin-top', $height);

	// Fixed & Sticky header
	if ($('#header').hasClass('sticky-header')) {
	 	$('#header').css('position', 'fixed');
	}

    if ($('#header').hasClass('smart-header')) {

        var previousScroll = 0;
        	headerOrgOffset = $('#header').outerHeight();
        	toolbarOffset = $('#wpadminbar').height();

        $(window).scroll(function () {
            var currentScroll = $(this).scrollTop();
            if (currentScroll > headerOrgOffset) {
                if (currentScroll > previousScroll) {
                    $('#header').css({
    					'top' : '-87px',
    					'transition' : ' 0.3s ease-in-out'
                    });
                } else {
                    $('#header').css({
                    	'position' : 'fixed',
    					'top' : '0',
    					'transition' : ' 0.3s ease-in-out' 
                    });
                }
            }
            else {
                $('#header').css('poistion','absolute');
            }
            previousScroll = currentScroll;
        });
    }

    // Header slider "Owl Carousel"
    var $carousel = $('[data-owl-carousel]');
    if ($carousel.length) {
         $carousel.each(function(index, el) {
              $(this).owlCarousel($(this).data('owl-carousel'));
         });
     }

});
