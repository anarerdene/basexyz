<?php

	#-----------------------------------------------------------------#
	# Footer Enable/Dsiable.
	#-----------------------------------------------------------------#

	// Settings
	$wp_customize->add_setting( 'footer_option', array(
		'default'           => true,
		'sanitize_callback' => false,

	));

	// Control
	$wp_customize->add_control( 'footer_option_control', array(
		'label'       => __( 'Show Footer', 'basexyz' ),
		'description' => __( 'Check this to enable footer.', 'basexyz' ),
		'section'     => 'footer_section',
		'settings'    => 'footer_option',
		'type'        => 'checkbox',
	));


	#-----------------------------------------------------------------#
	# Footer Column.
	#-----------------------------------------------------------------#

	// Settings
	$wp_customize->add_setting( 'footer_column', array(
		'default'           => '4',
		'sanitize_callback' => false,

	));

	// Control
	$wp_customize->add_control( 'footer_column_control', array(
		'label'       => __( 'Footer Column', 'basexyz' ),
		'description' => __( 'Choose the number of columns in the footer.', 'basexyz' ),
		'section'     => 'footer_section',
		'settings'    => 'footer_column',
		'type'		  => 'select',
		'choices'     => array(
			'1'   => '1 Column',
			'2'   => '2 Columns',
			'3'   => '3 Columns',
			'4'   => '4 Columns',
		),
	));


	#-----------------------------------------------------------------#
	# Copyright Text.
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'footer_copyright', array(
		'default'           => '2017. Arvien Team',
		'sanitize_callback' => false,

	));

	// Setting.
	$wp_customize->add_control( 'footer_copyright_control', array(
		'label'    => __( 'Copyright Text', 'basexyz' ),
		'section'  => 'footer_section',
		'settings' => 'footer_copyright',
		'type'     => 'textarea',
	) );


	#-----------------------------------------------------------------#
	# Footer Controls.
	#-----------------------------------------------------------------#



	
