<?php
	#-----------------------------------------------------------------#
	# Categories layout.
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_layout', array(
		'default'           => 'list',
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( new AV_Custom_Radio_Image_Control( $wp_customize, 'category_layout_control', array(
		'label'       => __( 'Post Layout', 'basexyz' ),
		'description' => __( 'Choose initial post layout.', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_layout',
		'capability'  => 'edit_theme_options',
		'choices'     => array(
			'list' 		=> $admin_path . 'img/category/layout-list.png',
			'grid'		=> $admin_path . 'img/category/layout-grid.png',
			'masonry' 	=> $admin_path . 'img/category/layout-masonry.png',
		),
	) ) );


	#-----------------------------------------------------------------#
	# Category Post Columns
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'post_column', array(
		'default'           => 'pb-4 col-md-12',
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'post_column_control', array(
		'label'       => __( 'Post Column', 'basexyz' ),
		'description' => __( 'Choose initial post column.', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'post_column',
		'type'		  => 'select',
		'capability'  => 'edit_theme_options',
		'choices'     => array(
			'pb-4 col-md-12' => '1',
			'pb-4 col-md-6'  => '2',
			'pb-4 col-md-4'  => '3',
			'pb-4 col-md-3'  => '4',
		),
	) );

	#-----------------------------------------------------------------#
	# Category Title Exerpts
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_title_exerpts', array(
		'default'           => '20',
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_title_exerpts_control', array(
		'label'       => __( 'Title Length', 'basexyz' ),
		'description' => __( 'Number of words in title.', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_title_exerpts',
		'capability'  => 'edit_theme_options',
	) );

	#-----------------------------------------------------------------#
	# Category Summary Exerpts
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_exerpts', array(
		'default'           => '20',
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_exerpts_control', array(
		'label'       => __( 'Excerpt Length', 'basexyz' ),
		'description' => __( 'Number of words in excerpt.', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_exerpts',
		'capability'  => 'edit_theme_options',
	) );


	#-----------------------------------------------------------------#
	# Category Pagination
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_pagination', array(
		'default'           => 'default',
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_pagination_control', array(
		'label'       => __( 'Pagination', 'basexyz' ),
		'description' => __( 'Choose pagination type.', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_pagination',
		'type'		  => 'select',
		'capability'  => 'edit_theme_options',
		'choices'     => array(
			'default' => 'Standart pagination',
			'infinit'  => 'Infinit scroll',
		),
	) );

	#-----------------------------------------------------------------#
	# Read more
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_readmore', array(
		'default'           => true,
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_readmore_control', array(
		'label'       => __( 'Display Read More link', 'basexyz' ),
		'description' => __( '', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_readmore',
		'capability'  => 'edit_theme_options',
		'type'        => 'checkbox',
	) );

	#-----------------------------------------------------------------#
	# Post author
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_post_author', array(
		'default'           => true,
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_post_author_control', array(
		'label'       => __( 'Display Post Author', 'basexyz' ),
		'description' => __( '', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_post_author',
		'capability'  => 'edit_theme_options',
		'type'        => 'checkbox',
	) );


	#-----------------------------------------------------------------#
	# Post Date
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_post_date', array(
		'default'           => true,
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_post_date_control', array(
		'label'       => __( 'Display Post Date', 'basexyz' ),
		'description' => __( '', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_post_date',
		'capability'  => 'edit_theme_options',
		'type'        => 'checkbox',
	) );


	#-----------------------------------------------------------------#
	# Post Comment
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_post_comment', array(
		'default'           => true,
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_post_comment_control', array(
		'label'       => __( 'Display Post Comment', 'basexyz' ),
		'description' => __( '', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_post_comment',
		'capability'  => 'edit_theme_options',
		'type'        => 'checkbox',
	) );


	#-----------------------------------------------------------------#
	# Post Comment
	#-----------------------------------------------------------------#

	// Setting.
	$wp_customize->add_setting( 'category_post_catlist', array(
		'default'           => true,
		'sanitize_callback' => false,

	) );

	// Control.
	$wp_customize->add_control( 'category_post_catlist_control', array(
		'label'       => __( 'Display Post Categories', 'basexyz' ),
		'description' => __( '', 'basexyz' ),
		'section'     => 'category_section',
		'settings'    => 'category_post_catlist',
		'capability'  => 'edit_theme_options',
		'type'        => 'checkbox',
	) );
	
