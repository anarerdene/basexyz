<?php
	#-----------------------------------------------------------------#
	# Main width.
	#-----------------------------------------------------------------#

	// Site Width.
	$wp_customize->add_setting( 'main_width', array(
		'default'           => '1200px',
		'sanitize_callback' => false,

	) );

	// Control
	$wp_customize->add_control( 'main_width_control', array(
		'label'      => __( 'Main Width', 'basexyz' ),
		'section'    => 'general_section',
		'settings'   => 'main_width',
		'capability' => 'edit_theme_options',
	) );

	#-----------------------------------------------------------------#
	# Sidebar width.
	#-----------------------------------------------------------------#

	// Site Width.
	$wp_customize->add_setting( 'sidebar_width', array(
		'default'           => '300px',
		'sanitize_callback' => false,

	) );

	// Control
	$wp_customize->add_control( 'sidebar_width_control', array(
		'label'      => __( 'Sidebar Width', 'basexyz' ),
		'section'    => 'general_section',
		'settings'   => 'sidebar_width',
		'capability' => 'edit_theme_options',
	) );


	#-----------------------------------------------------------------#
	# Sidebar Position.
	#-----------------------------------------------------------------#


	// Sidebar Position.
	$wp_customize->add_setting( 'sidebar_position', array(
		'default'           => 'flex-last',
		'sanitize_callback' => false,

	) );

	$wp_customize->add_control('sidebar_position_control', array(
		'label'       => __( 'Sidebar Position', 'basexyz' ),
		'description' => __( 'Choose the default sidebar position for all categories.', 'basexyz' ),
		'section'     => 'general_section',
		'settings'    => 'sidebar_position',
		'type'        => 'select',
		'choices'     => array(
			'flex-first'  => 'Sidebar Left',
			'none'   	  => 'Sidebar None',
			'flex-last'   => 'Sidebar Right',
		),
	) );

	#-----------------------------------------------------------------#
	#  Default Sidebar.
	#-----------------------------------------------------------------#

	// setting.
	$wp_customize->add_setting( 'default_sidebar', array(
		'default'	=> 'default-sidebar',
	) );

	// control.
	$wp_customize->add_control('default_sidebar_control', array(
		'label'       => __( 'Sidebar', 'basexyz' ),
		'description' => __( 'Choose a sidebar. The chosen sidebar will become the default sidebar for all pages.', 'basexyz' ),
		'section'     => 'general_section',
		'settings'    => 'default_sidebar',
		'type'        => 'select',
		'choices'     => basexyz_get_sidebars(),
	) );

