<?php

/**
 * Register widgets. Appearance->Widgets.
 */

function basexyz_register_widgets() {

	register_sidebar( array(
		'name'          => __( 'Default Sidebar', 'basexyz' ),
		'id'            => 'default-sidebar',
		'description'   => __( 'Widgets added here will appear in your main sidebar.', 'basexyz' ),
		'before_widget' => '<div id="widget-%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h4>',
		'after_title'   => '</h4></div>',
	) );

	for ( $i = 1; $i <= 4; $i ++ ) {
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Footer Column %d', 'basexyz' ), $i ),
			'id'            => "footer-sidebar-{$i}",
			'description'   => '',
			'before_widget' => '<div id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title"><h4>',
			'after_title'   => '</h4></div>',
		) );
	}
}

add_action( 'widgets_init', 'basexyz_register_widgets' );