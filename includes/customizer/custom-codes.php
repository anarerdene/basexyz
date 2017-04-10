<?php
	#-----------------------------------------------------------------#
	# Custom Code Settings
	#-----------------------------------------------------------------#

	// Settings.
	$wp_customize->add_setting( 'custom_css', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	$wp_customize->add_setting( 'custom_js', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	$wp_customize->add_setting( 'google_code', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	#-----------------------------------------------------------------#
	# Custom Code Controls
	#-----------------------------------------------------------------#

	//Controls.
	$wp_customize->add_control( 'custom_css_control', array(
		'label'       => __( 'Custom CSS Code', 'newsbox' ),
		'description' => __( 'Insert your custom CSS code here.', 'newsbox' ),
		'section'     => 'custom_codes',
		'settings'    => 'custom_css',
		'type'        => 'textarea',
	) );

	$wp_customize->add_control( 'custom_js_control', array(
		'label'       => __( 'Custom JS Code', 'newsbox' ),
		'description' => __( 'Insert your custom JS code here.', 'newsbox' ),
		'section'     => 'custom_codes',
		'settings'    => 'custom_js',
		'type'        => 'textarea',
	) );
