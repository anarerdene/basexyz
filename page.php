<?php get_header(); ?>

<?php basexyz_page_header(); ?>

<div class="wrap">
	<div class="container">
		<div class="row">
			<!-- Include: Sidebar -->
			<?php get_sidebar(); ?>

			<!-- Main -->
			<main id="content" role="main" class="col-lg">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'templates/page/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					echo('eeee');
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #content -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrap -->



<?php get_footer();
