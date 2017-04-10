<?php
	$basexyz_sidebar			= get_theme_mod('default_sidebar', 'default-sidebar' ); 		// Initial Default Sidebar
	$basexyz_sidebar_position   = get_theme_mod('sidebar_position', 'flex-last'); 				// Initial Sidebar Position

	if (is_category()) {
	    $term_id = get_query_var('cat'); 										// the current category ID
		$basexyz_term = get_term_meta( $term_id, 'basexyz_term_'.$term_id, true); 	// getting the current category options

		// Changing Values
		if( !empty( $basexyz_term ) ){
	        $basexyz_sidebar_position = $basexyz_term['sidebar_position'];
	    }

	} elseif (is_single() || is_page()) {

		$post_id = get_the_ID();
		$post_meta = get_post_meta( $post_id, 'basexyz_page_'.$post_id, true );

	    // Changing Values
		if( !empty( $post_meta ) ){
	        $basexyz_sidebar_position = $post_meta['sidebar_position'];
	        $basexyz_sidebar          = $post_meta['default_sidebar'];
	    }

	}	
?>

<!-- Sidebar -->
<?php if ( is_active_sidebar($basexyz_sidebar) && esc_attr( $basexyz_sidebar_position ) !== 'none' ): ?>
	<!-- Default Sidebar -->
	<aside id="sidebar" role="complementary" class="<?php echo esc_attr( $basexyz_sidebar_position ); ?>">
		<?php  dynamic_sidebar(esc_attr( $basexyz_sidebar )); ?>
	</aside>
	<!-- // Default Sidebar -->
<?php endif; ?>