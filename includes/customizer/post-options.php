<?php
	#-----------------------------------------------------------------#
	# Post Option Arrays
	#-----------------------------------------------------------------#

	$sidebar_position = array(
		'sidebar-right' => $admin_path . 'img/sidebar/sidebar-right.png',
		'sidebar-left'  => $admin_path . 'img/sidebar/sidebar-left.png',
		'sidebar-none'  => $admin_path . 'img/sidebar/sidebar-none.png',
	);

	$single_header_layout = array(
		'layout-a' => $admin_path . 'img/featured-standard.png',
		'layout-b' => $admin_path . 'img/featured-full.png',
		'layout-c' => $admin_path . 'img/featured-site.png',
		'layout-d' => $admin_path . 'img/featured-screen.png',
	);

	$single_title_position = array(
		'title-standard' => $admin_path . 'img/default-title.png',
		'title-absolute' => $admin_path . 'img/title-on-image.png',
	);

	$single_content_width = array(
		'content-full'   => $admin_path . 'img/content-full.png',
		'content-narrow' => $admin_path . 'img/content-narrow.png',
	);


	#-----------------------------------------------------------------#
	# Post Options Settings
	#-----------------------------------------------------------------#

	// Single Post Dynamic Sidebar.
	$wp_customize->add_setting( 'single_sidebar', array(
		'default'           => 'sidebar-main',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Single Post Sidebar Position.
	$wp_customize->add_setting( 'single_sidebar_position', array(
		'default'           => 'sidebar-right',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Single Post Featured Image Layout variants
	$wp_customize->add_setting( 'single_header_layout', array(
		'default'           => 'layout-a',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Single Post Title Position.
	$wp_customize->add_setting( 'single_title_position', array(
		'default'           => 'title-standard',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Single Post Content Styles.
	$wp_customize->add_setting( 'single_content_width', array(
		'default'           => 'content-full',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Share.
	$wp_customize->add_setting( 'post_share', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Tags.
	$wp_customize->add_setting( 'post_tags', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );

	// Navigation.
	$wp_customize->add_setting( 'post_navigation', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Author.
	$wp_customize->add_setting( 'post_authors', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Related Posts.
	$wp_customize->add_setting( 'post_related', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Comments.
	$wp_customize->add_setting( 'post_comment', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Post Meta Date.
	$wp_customize->add_setting( 'meta_date', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Post Meta author.
	$wp_customize->add_setting( 'meta_author', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Post Meta views.
	$wp_customize->add_setting( 'meta_views', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Post Meta categories.
	$wp_customize->add_setting( 'meta_category', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );


	// Post Meta comments.
	$wp_customize->add_setting( 'meta_comment', array(
		'default'           => true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => false,

	) );
	#-----------------------------------------------------------------#
	# Post Options Controls
	#-----------------------------------------------------------------#

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_sidebar_control', array(
		'label'       => __( 'Sidebar', 'newsbox' ),
		'description' => __( 'Choose any sidebar. This will be default for the global posts.', 'newsbox' ),
		'section'     => 'single_post_section',
		'settings'    => 'single_sidebar',
		'type'        => 'select',
		'choices'     => newsbox_get_sidebars(),
	) ) );


	$wp_customize->add_control( new AV_Custom_Radio_Image_Control( $wp_customize, 'single_sidebar_position_control', array(
		'label'       => __( 'Sidebar Position', 'newsbox' ),
		'description' => __( 'Choose the default sidebar position for all posts.', 'newsbox' ),
		'section'     => 'single_post_section',
		'settings'    => 'single_sidebar_position',
		'capability'  => 'edit_theme_options',
		'choices'     => $sidebar_position,
	) ) );

	$wp_customize->add_control( new AV_Custom_Radio_Image_Control( $wp_customize, 'single_header_layout_control', array(
		'label'       => __( 'Featured Image Style', 'newsbox' ),
		'description' => __( 'Choose the featured image style for all posts.', 'newsbox' ),
		'section'     => 'single_post_section',
		'settings'    => 'single_header_layout',
		'capability'  => 'edit_theme_options',
		'choices'     => $single_header_layout,
	) ) );

	$wp_customize->add_control( new AV_Custom_Radio_Image_Control( $wp_customize, 'single_title_position_control', array(
		'label'       => __( 'Title Position', 'newsbox' ),
		'description' => __( 'Choose the title position for all posts.', 'newsbox' ),
		'section'     => 'single_post_section',
		'settings'    => 'single_title_position',
		'capability'  => 'edit_theme_options',
		'choices'     => $single_title_position,
	) ) );

	$wp_customize->add_control( new AV_Custom_Radio_Image_Control( $wp_customize, 'single_content_width_control', array(
		'label'       => __( 'Content Width', 'newsbox' ),
		'description' => __( 'Choose the content width for all posts.', 'newsbox' ),
		'section'     => 'single_post_section',
		'settings'    => 'single_content_width',
		'capability'  => 'edit_theme_options',
		'choices'     => $single_content_width,
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_share_control', array(
		'label'      => __( 'Display Post Share', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'post_share',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_tags_control', array(
		'label'      => __( 'Display Post Tags', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'post_tags',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_navigation_control', array(
		'label'      => __( 'Display Post Navigation', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'post_navigation',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_authors_control', array(
		'label'      => __( 'Display Post Author', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'post_authors',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_control', array(
		'label'      => __( 'Display Related Posts', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'post_related',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_comment_control', array(
		'label'      => __( 'Display Post Comments', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'post_comment',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'meta_date_control', array(
		'label'      => __( 'Meta Date', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'meta_date',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'meta_author_control', array(
		'label'      => __( 'Meta Author', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'meta_author',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'meta_views_control', array(
		'label'      => __( 'Meta Views', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'meta_views',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'meta_category_control', array(
		'label'      => __( 'Meta categories', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'meta_category',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'meta_comment_control', array(
		'label'      => __( 'Meta comments', 'newsbox' ),
		'section'    => 'single_post_section',
		'settings'   => 'meta_comment',
		'capability' => 'edit_theme_options',
		'type'       => 'checkbox',
	) ) );
