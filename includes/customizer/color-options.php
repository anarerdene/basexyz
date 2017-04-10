<?php
	#-----------------------------------------------------------------#
	# Color Settings
	#-----------------------------------------------------------------#

	// Primary Color.
	$wp_customize->add_setting( 'primary_color', array(
		'default'           =>  newsbox_defualt_value('primary_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Backgound color.
	$wp_customize->add_setting( 'body_bg_color', array(
		'default'           =>  newsbox_defualt_value('body_bg_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Header bg color.
	$wp_customize->add_setting( 'header_bg_color', array(
		'default'           => newsbox_defualt_value('header_bg_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Header text color.
	$wp_customize->add_setting( 'header_text_color', array(
		'default'           =>  newsbox_defualt_value('header_text_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Nav background color.
	$wp_customize->add_setting( 'dropdown_bg_color', array(
		'default'           =>  newsbox_defualt_value('dropdown_bg_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Nav text color.
	$wp_customize->add_setting( 'dropdown_text_color', array(
		'default'           => newsbox_defualt_value('dropdown_text_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Side Area background color.
	$wp_customize->add_setting( 'sidearea_bg_color', array(
		'default'           => newsbox_defualt_value('sidearea_bg_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Side Area text color.
	$wp_customize->add_setting( 'sidearea_text_color', array(
		'default'           => newsbox_defualt_value('sidearea_text_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Footer bg color.
	$wp_customize->add_setting( 'footer_bg_color', array(
		'default'           => newsbox_defualt_value('footer_bg_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Footer heading color.
	$wp_customize->add_setting( 'footer_heading_color', array(
		'default'           => newsbox_defualt_value('footer_heading_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Footer text color.
	$wp_customize->add_setting( 'footer_text_color', array(
		'default'           => newsbox_defualt_value('footer_text_color'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,
	) );

	#-----------------------------------------------------------------#
	# Controllers
	#-----------------------------------------------------------------#

	// Primary Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_control', array(
		'label'       => __( 'Primary Color', 'newsbox' ),
		'section'     => 'color_section',
		'settings'    => 'primary_color',

	) ) );


	// Body background Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_bg_color_control', array(
		'label'    => __( 'Body Background Color', 'newsbox' ),
		'section'  => 'color_section',
		'settings' => 'body_bg_color',
	) ) );


	// Header background Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color_control', array(
		'label'       => __( 'Header Background', 'newsbox' ),
		'section'     => 'color_section',
		'settings'    => 'header_bg_color',
	) ) );

	// Header text Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_color_control', array(
		'label'       => __( 'Header Text', 'newsbox' ),
		'section'     => 'color_section',
		'settings'    => 'header_text_color',
	) ) );

	// Nav background Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dropdown_bg_color_control', array(
		'label'       => __( 'Nav Dropdown Background', 'newsbox' ),
		'section'     => 'color_section',
		'settings'    => 'dropdown_bg_color',
	) ) );

	// Nav text Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dropdown_text_color_control', array(
		'label'       => __( 'Nav Dropdown Text', 'newsbox' ),
		'section'     => 'color_section',
		'settings'    => 'dropdown_text_color',
	) ) );

	// Side Area Background color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidearea_bg_color_control', array(
		'label'       => __( 'Side Area - Background color', 'newsbox' ),
		'section'     => 'color_section',
		'settings'    => 'sidearea_bg_color',

	) ) );

	// Side Area text color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidearea_tex_color_control', array(
		'label'       => __( 'Side Area - Text color', 'newsbox' ),
		'section'     => 'color_section',
		'settings'    => 'sidearea_text_color',
	) ) );

	// Footer background Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color_control', array(
		'label'    => __( 'Footer - Background Color', 'newsbox' ),
		'section'  => 'color_section',
		'settings' => 'footer_bg_color',
	) ) );


	// Footer heading Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_heading_color_control', array(
		'label'    => __( 'Footer - Heading Color', 'newsbox' ),
		'section'  => 'color_section',
		'settings' => 'footer_heading_color',
	) ) );

	// Footer text Color.
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color_control', array(
		'label'    => __( 'Footer - Text Color', 'newsbox' ),
		'section'  => 'color_section',
		'settings' => 'footer_text_color',
	) ) );
