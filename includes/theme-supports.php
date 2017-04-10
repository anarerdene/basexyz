<?php


#-----------------------------------------------------------------#
# Theme Supports
#-----------------------------------------------------------------#

function basexyz_theme_supports() {

	/*
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 */
	load_theme_textdomain( 'basexyz', BASEXYZ_THEME_PATH . '/languages' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * Declare thumbnail sizes
	 */
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 400, 200, true );

	add_image_size( 'basexyz-1x1-m', 500, 500, true );
	add_image_size( 'basexyz-1x1-l', 800, 800, true );
	
	// 2x1.
	add_image_size( 'basexyz-2x1-m', 800, 400, true );
	add_image_size( 'basexyz-2x1-l', 1400, 700, true );
	add_image_size( 'basexyz-2x1-xl', 1920, 960, true );

	// 3x2.
	add_image_size( 'basexyz-3x2-s', 600, 400, true );
	add_image_size( 'basexyz-3x2-m', 900, 600, true );
	add_image_size( 'basexyz-3x2-l', 1440, 1080, true );
	// 4x3.
	add_image_size( 'basexyz-4x3-m', 600, 450, true );
	add_image_size( 'basexyz-4x3-l', 800, 600, true );
	add_image_size( 'basexyz-4x3-xl', 1400, 1050, true );
	// 16x9.
	add_image_size( 'basexyz-16x9-m', 480, 270, true );
	add_image_size( 'basexyz-16x9-l', 800, 450, true );
	add_image_size( 'basexyz-16x9-xl', 1600, 900, true );
	add_image_size( 'basexyz-16x9-xxl', 1920, 1080, true );


	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/*
	 * This theme allows users to set a custom background
	 */
	add_theme_support( 'custom-background', array(
		'default-color'	=> '#F2F5F7',
	));

	/*
	 * This theme allows users to set a custom Header
	 */
	// add_theme_support( 'custom-header', array(
	// 	'wp-head-callback'	=> 'basexyz_tagline',
	// ));

	add_theme_support( 'custom-logo', array(
		'height'      => 30,
		'width'       => 170,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' )
	));

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'audio',
		'video',
		'gallery',
	));

	/*
	 * Switch default core markup for search form, comment form, comments
	 * and gallery to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
	));


	/*
	 * This theme uses wp_nav_menu() in one locations.
	 */
	register_nav_menus( array(
		'nav_primary' => esc_html__( 'Primary Navigation', 'basexyz' ),
		'nav_left'    => esc_html__( 'Left Navigation', 'basexyz' ),
		'nav_right'   => esc_html__( 'Right Navigation', 'basexyz' ),
	));


	// Removing emoji.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

}
add_action( 'after_setup_theme', 'basexyz_theme_supports' );

#-----------------------------------------------------------------#
# Default thumb sizes
#-----------------------------------------------------------------#

function basexyz_remove_default_image_sizes( $sizes ) {
	unset( $sizes['thumbnail'] );
	unset( $sizes['medium'] );
	unset( $sizes['medium_large'] );
	unset( $sizes['large'] );

	return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'basexyz_remove_default_image_sizes' );