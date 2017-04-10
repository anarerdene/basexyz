<?php

	// Page comment.
	$wp_customize->add_setting( 'page_comments', array(
		'default'           => false,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Page social icons.
	$wp_customize->add_setting( 'page_social', array(
		'default'           => false,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	#-----------------------------------------------------------------#
	# Page Controllers
	#-----------------------------------------------------------------#

	

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_comments_control', array(
		'label'       => __( 'Display Comment', 'basexyz' ),
		'description' => __( 'Check this to enable page comment.', 'basexyz' ),
		'section'     => 'page_section',
		'settings'    => 'page_comments',
		'type'        => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_social_control', array(
		'label'       => __( 'Display Social Shares', 'basexyz' ),
		'description' => __( 'Check this to enable social sharing icons.', 'basexyz' ),
		'section'     => 'page_section',
		'settings'    => 'page_social',
		'type'        => 'checkbox',
	) ) );
