<?php

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}

// Default theme constants.
define( 'BASEXYZ_THEME_URL', trailingslashit( get_template_directory_uri() ));
define( 'BASEXYZ_THEME_PATH', trailingslashit( get_template_directory() ));

#-----------------------------------------------------------------#
# Theme Includes
#-----------------------------------------------------------------#


// Main Framework
require_once BASEXYZ_THEME_PATH . 'framework/framework.php';

// Files & includes
require_once BASEXYZ_THEME_PATH . 'includes/theme-widgets.php';
require_once BASEXYZ_THEME_PATH . 'includes/theme-supports.php';
require_once BASEXYZ_THEME_PATH . 'includes/customizer.php';

// Scripts and styles.
require_once BASEXYZ_THEME_PATH . 'includes/assets.php';

// Main init.
if ( !function_exists( 'basexyz_setup' ) ) {
	function basexyz_setup() {
		add_action( 'wp_enqueue_scripts', 'basexyz_enqueue' );
	}
}
add_action( 'after_setup_theme', 'basexyz_setup' );



// Init and register widgets.
// require_once BASEXYZ_SERVER_PATH . 'includes/core/widget-area.php';
// Theme defaults.
// require_once BASEXYZ_SERVER_PATH . 'includes/core/defaults.php';
// Theme actions.
// require_once BASEXYZ_SERVER_PATH . 'includes/core/helpers.php';
// Call filters.
// require_once BASEXYZ_SERVER_PATH . 'includes/core/filters.php';
// Theme support.
// require_once BASEXYZ_SERVER_PATH . 'includes/core/support.php';
// Initial Settings
// require_once BASEXYZ_SERVER_PATH . 'includes/core/defaults.php';
// Template Tags
// require_once BASEXYZ_SERVER_PATH . 'includes/core/template-tags.php';
// Customize
// require_once BASEXYZ_SERVER_PATH . 'includes/customizer/customizer.php';

// Admin Options
// require_once BASEXYZ_SERVER_PATH . 'admin/functions.php';
//TGM_Plugin_Activation class
// require_once BASEXYZ_SERVER_PATH . 'admin/tgm.php';



// Demo Data
// require_once BASEXYZ_SERVER_PATH . 'includes/demos/import.php';




