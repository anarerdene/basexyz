<article id="post-<?php the_ID(); ?>" <?php post_class('post-masonry'); ?>>
	<div class="row">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="col-md-12">
				<?php basexyz_thumbnail('basexyz-2x1-m'); ?>
			</div>
		<?php endif; ?>

		<div class="col">
			<!-- Entry Title -->
			 <h2 class="entry-title">
			 	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			 </h2>

			<!-- Entry Content -->
			<div class="entry-content">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
					<?php the_author(); ?>		
				</a>
				<?php the_date(); ?>
				<?php the_category(); ?>
			    <?php the_excerpt(); ?>
				<?php wp_link_pages();?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-## -->
