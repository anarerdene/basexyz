<?php

	#-----------------------------------------------------------------#
	#  Header Styles.
	#-----------------------------------------------------------------#

	$header_style_choices = array(
		'style-1' 	=> 'Style 1',
		'style-2'	=> 'Style 2',
	);

	// Setting
	$wp_customize->add_setting( 'header_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => false,
	));

	// Control
	$wp_customize->add_control( 'header_style_control', array(
		'label'       => __( 'Header Styles', 'basexyz' ),
		'description' => __( 'Select the layout for the header.', 'basexyz' ),
		'section'     => 'header_section',
		'settings'    => 'header_style',
		'type'        => 'select',
		'choices'     => $header_style_choices,
	) );

	#-----------------------------------------------------------------#
	#  Header Width.
	#-----------------------------------------------------------------#

	// Choices
	$header_width = array(
		'container' 		=> 'Fixed Width',
		'container-fluid'	=> 'Fluid Width',
	);

	// Setting
	$wp_customize->add_setting( 'header_width', array(
		'default'           => 'container',
		'sanitize_callback' => false,
	));

	// Control
	$wp_customize->add_control( 'header_width_control', array(
		'label'       => __( 'Header Width', 'basexyz' ),
		'description' => __( 'Select the layout width for the header.', 'basexyz' ),
		'section'     => 'header_section',
		'settings'    => 'header_width',
		'type'        => 'select',
		'choices'     => $header_width,
	) );

	#-----------------------------------------------------------------#
	# Header Type.
	#-----------------------------------------------------------------#

	// Choices
	$header_types = array(
		'default' 			=> 'Default',
		'sticky-header'		=> 'Sticky Header',
		'smart-header'		=> 'Smart Header',
	);

	// Setting
	$wp_customize->add_setting( 'header_type', array(
		'default'           => 'default',
		'sanitize_callback' => false,

	));

	// Control
	$wp_customize->add_control( 'header_type_control', array(
		'label'       => __( 'Header types', 'basexyz' ),
		'description' => __( 'Select the type for header.', 'basexyz' ),
		'section'     => 'header_section',
		'settings'    => 'header_type',
		'type'        => 'select',
		'choices'     => $header_types,
	) );