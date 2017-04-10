<?php

#-----------------------------------------------------------------#
# Get Global arrays
#-----------------------------------------------------------------#

// Sidebar
function basexyz_get_sidebars() {
	global $wp_registered_sidebars;
	$list_sidebars = array();
	foreach ( $wp_registered_sidebars as $sidebar ) {
		$list_sidebars[ $sidebar['id'] ] = $sidebar['name'];
	}

	return $list_sidebars;
}

#-----------------------------------------------------------------#
# Customizer Includes
#-----------------------------------------------------------------#

function basexyz_customize_register( $wp_customize ) {

	if ( !isset( $wp_customize ) ) {
		return;
	}

	// $WP_customize Custom Extends
	require_once BASEXYZ_THEME_PATH . 'includes/customizer/custom-controls/customizer-extends.php';

	#-----------------------------------------------------------------#
	# Cuztomizer Sections
	#-----------------------------------------------------------------#

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );

	// General Section
	$wp_customize->add_section( 'general_section', array(
		'title'    => __( 'General', 'basexyz' ),
		'priority' => '20',
	) );

	// Header Section.
	$wp_customize->add_section( 'header_section', array(
		'title'    => __( 'Header & Navigation', 'basexyz' ),
		'priority' => '30',
	) );

	// General Section
	$wp_customize->add_section( 'sidebar_section', array(
		'title'    => __( 'Sidebar', 'basexyz' ),
		'priority' => '30',
	) );


	$wp_customize->add_section( 'category_section', array(
		'title'    => __( 'Category & Archive', 'basexyz' ),
		'priority' => '40',
	) );

	// Single Post.
	$wp_customize->add_section( 'single_post_section', array(
		'title'    => __( 'Single Post', 'basexyz' ),
		'priority' => '50',
	) );

	// Page.
	$wp_customize->add_section( 'page_section', array(
		'title'    => __( 'Page', 'basexyz' ),
		'priority' => '60',
	) );

	// Typo.
	$wp_customize->add_section( 'typography_section', array(
		'title'    => __( 'Typography', 'basexyz' ),
		'priority' => '70',
	) );

	// Colors.
	$wp_customize->add_section( 'color_section', array(
		'title'    => __( 'Colors', 'basexyz' ),
		'priority' => '80',
	) );

	// Footer.
	$wp_customize->add_section( 'footer_section', array(
		'title'    => __( 'Footer', 'basexyz' ),
		'priority' => '90',
	) );

	// Footer.
	$wp_customize->add_section( 'custom_codes', array(
		'title'    => __( 'Custom Codes', 'basexyz' ),
		'priority' => '100',
	) );


	$admin_path = BASEXYZ_THEME_PATH . 'includes/customizer/';

	// Customize Options.
	require_once BASEXYZ_THEME_PATH . 'includes/customizer/general.php';
	require_once BASEXYZ_THEME_PATH . 'includes/customizer/header.php';
	require_once BASEXYZ_THEME_PATH . 'includes/customizer/category.php';
	require_once BASEXYZ_THEME_PATH . 'includes/customizer/page.php';
	require_once BASEXYZ_THEME_PATH . 'includes/customizer/footer.php';
	// require_once BASEXYZ_SERVER_PATH . 'includes/customizer/typo-options.php';
	// require_once BASEXYZ_SERVER_PATH . 'includes/customizer/color-options.php';
	// require_once BASEXYZ_SERVER_PATH . 'includes/customizer/post-options.php';
	// require_once BASEXYZ_SERVER_PATH . 'includes/customizer/custom-codes.php';

	// Helper Santilaze callback
	require_once BASEXYZ_THEME_PATH . 'includes/customizer/theme.php';

}

add_action( 'customize_register', 'basexyz_customize_register' );

#-----------------------------------------------------------------#
# Output customize CSS
#-----------------------------------------------------------------#

require_once BASEXYZ_THEME_PATH . 'includes/customizer/css/core-output-css.php';


