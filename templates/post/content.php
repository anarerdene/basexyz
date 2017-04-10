<article id="post-<?php the_ID(); ?>" <?php post_class('post-grid'); ?>>

	<!-- Entry header -->
	<header class="entry-header">
		<a href="<?php the_permalink();?>">
			<?php the_title(); ?>
		</a>
	</header><!-- .entry-header -->

	<!-- Post thumbnail -->
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
	</div><!-- .post-thumbnail -->

	<!-- Entry Content -->
	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages();
		?>
	</div><!-- .entry-content -->
	
</article>
