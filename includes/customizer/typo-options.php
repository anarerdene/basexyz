<?php

	#-----------------------------------------------------------------#
	# Post Option Arrays
	#-----------------------------------------------------------------#

	// Default Fonts.
	$newsbox_font_choices = array(
		'Montserrat, sans-serif'          => 'Montserrat',
		'Open Sans, sans-serif'           => 'Open Sans',
		'Roboto Slab, serif'              => 'Roboto Slab',
		'Open Sans Condensed, sans-serif' => 'Open Sans Condensed',
		'Lato, sans-serif'                => 'Lato',
		'Merriweather, serif'             => 'Merriweather',
	);

	// Default Fonts Type.
	$newsbox_font_weight = array(
		'400' => 'Regular',
		'700' => 'Bold',
		'300' => 'Light',
	);

	#-----------------------------------------------------------------#
	# Post Option Settings
	#-----------------------------------------------------------------#

	// Main Font Family.
	$wp_customize->add_setting( 'main_font_family', array(
		'default'           => 'Montserrat, sans-serif',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Main Font Size.
	$wp_customize->add_setting( 'main_font_size', array(
		'default'           => '14px',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Body Font Style.
	$wp_customize->add_setting( 'main_font_weight', array(
		'default'           => '400',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Body Text Color.
	$wp_customize->add_setting( 'main_font_color', array(
		'default'           => '#333333',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Heading Font.
	$wp_customize->add_setting( 'heading_font_family', array(
		'default'           => 'Montserrat, sans-serif',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Heading Font Weight.
	$wp_customize->add_setting( 'heading_font_weight', array(
		'default'           => '700',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Heading font Color.
	$wp_customize->add_setting( 'heading_font_color', array(
		'default'           => '#333333',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	#-----------------------------------------------------------------#
	# Post Option Controls
	#-----------------------------------------------------------------#

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'main_font_family_control', array(
		'settings'    => 'main_font_family',
		'label'       => __( 'Body Font', 'newsbox' ),
		'description' => __( 'Font Family', 'newsbox' ),
		'section'     => 'typography_section',
		'type'        => 'select',
		'choices'     => $newsbox_font_choices,
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'main_font_size_control', array(
		'description' => __( 'Font Size', 'newsbox' ),
		'section'     => 'typography_section',
		'settings'    => 'main_font_size',
		'type'        => 'text',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'main_font_weight_control', array(
		'description' => __( 'Font Weight', 'newsbox' ),
		'section'     => 'typography_section',
		'settings'    => 'main_font_weight',
		'type'        => 'select',
		'choices'     => $newsbox_font_weight,
	) ) );


	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_font_color_control', array(
		'description' => __( 'Font Color', 'newsbox' ),
		'section'     => 'typography_section',
		'settings'    => 'main_font_color',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_font_family_control', array(
		'label'       => __( 'Heading Font', 'newsbox' ),
		'description' => __( 'Font Family', 'newsbox' ),
		'section'     => 'typography_section',
		'settings'    => 'heading_font_family',
		'type'        => 'select',
		'choices'     => $newsbox_font_choices,
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_font_weight_control', array(
		'description' => __( 'Font Weight', 'newsbox' ),
		'section'     => 'typography_section',
		'settings'    => 'heading_font_weight',
		'type'        => 'select',
		'choices'     => $newsbox_font_weight,
	) ) );


	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_font_color_control', array(
		'description' => __( 'Font Color', 'newsbox' ),
		'section'     => 'typography_section',
		'settings'    => 'heading_font_color',
	) ) );
