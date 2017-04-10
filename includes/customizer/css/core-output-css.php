<?php
function basexyz_dynamic_css() { 

	wp_enqueue_style( 'basexyz_dynamic_css', BASEXYZ_THEME_URL . 'style.css' );

	// General
	$basexyz_site_width			= get_theme_mod('main_width', '1200px');
	$basexyz_body_bg			= get_theme_mod('body_bg_color', '#f5f5f5');
	$basexyz_sidebar_width 		= get_theme_mod('sidebar_width', '300px');
	


	$dynamic_css = "

		body {
			background: $basexyz_body_bg;
		}

		.container {
			max-width: $basexyz_site_width;
		}

		#sidebar {
			width: $basexyz_sidebar_width;
		}
		#footer {
			background-color: #fff;
		}

	";
	wp_add_inline_style( 'basexyz_dynamic_css', $dynamic_css );

}

add_action( 'wp_enqueue_scripts', 'basexyz_dynamic_css', 100 );

