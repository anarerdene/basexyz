<?php

#-----------------------------------------------------------------#
# Theme Enqueue
#-----------------------------------------------------------------#

function basexyz_enqueue() {
	// Enqueue styles.
	wp_enqueue_style( 'basexyz_bootstrap_css', BASEXYZ_THEME_URL . 'assets/css/vendor/bootstrap.min.css' );
	wp_enqueue_style( 'basexyz_owl_css', BASEXYZ_THEME_URL . 'assets/css/vendor/owl/owl.carousel.min.css' );
	wp_enqueue_style( 'basexyz_owl_theme_css', BASEXYZ_THEME_URL . 'assets/css/vendor/owl/owl.theme.default.min.css' );
	wp_enqueue_style( 'basexyz_main_css', BASEXYZ_THEME_URL . 'style.css' );

	// Enqueue scripts.
	wp_enqueue_script( 'basexyz_bootstrap_js', BASEXYZ_THEME_URL . 'assets/js/vendor/bootstrap.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'basexyz_owl_js', BASEXYZ_THEME_URL . 'assets/js/vendor/owl.carousel.min.js', array( 'jquery' ), false, true );

	// JS enqueue.
	wp_enqueue_script( 'basexyz_main_js', BASEXYZ_THEME_URL . 'assets/js/default.js', array(), false, true );
	

	// Inline JS & CSS 
	wp_add_inline_style( 'basexyz_main_css', esc_attr(get_theme_mod( 'custom_css' )));
	wp_add_inline_script( 'basexyz_main_js', esc_attr(get_theme_mod( 'custom_js' )));

	// Global JS.
	arvien_js_globals();

	// RTL support.
	if ( is_rtl() ) {
		wp_enqueue_style( 'basexyz_rtl', BASEXYZ_THEME_URL . 'assets/css/rtl.css', false, null );
	}

	// Comment Scripts
	if ( is_singular() && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

#-----------------------------------------------------------------#
# Register Fonts
#-----------------------------------------------------------------#

function arvien_fonts_url() {
    $font_url = '';

   	$font_url = add_query_arg( 'family', urlencode( 'Montserrat|Lato|Merriweather|Roboto Slab|Open Sans Condensed Sans:400,400italic,700italic,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );

    return $font_url;
}

function arvien_studio_scripts() {
    wp_enqueue_style( 'studio-fonts', arvien_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'arvien_studio_scripts' );

#-----------------------------------------------------------------#
# Sets global js variables through wp_localize_script().
#-----------------------------------------------------------------#

function arvien_js_globals() {
	wp_enqueue_script( 'basexyz_localize', BASEXYZ_THEME_URL . 'assets/js/load-more.js', array('jquery'), false, true );
	$js_globals = array(
		'cat_id' 		=> get_query_var('cat'),
		'post_count' 	=> get_option('posts_per_page'),
		'ajaxurl'		=> admin_url( 'admin-ajax.php' ),
    	'noposts' 		=> __('No older posts found.', 'basexyz'),
		'arvien_root' 	=> get_site_url(),
		'theme_root'  	=> get_template_directory_uri(),
	);
	wp_localize_script( 'basexyz_localize', 'js_globals', $js_globals );
}





