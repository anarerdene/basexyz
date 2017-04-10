<article id="post-<?php the_ID(); ?>" <?php post_class('post-list'); ?>>
	<div class="row">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="col-md-4">
				<?php basexyz_thumbnail('basexyz-3x2-s'); ?>
			</div>
		<?php endif; ?>

		<div class="col">
			<!-- Entry Title -->
			 <h2 class="entry-title">
			 	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			 </h2>

			<!-- Entry Content -->
			<div class="entry-content">
				<?php the_author(); ?>
				<?php the_date(); ?>
				<?php the_category(); ?>
			    <?php the_excerpt(); ?>
				<?php wp_link_pages();?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-## -->
