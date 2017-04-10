<?php get_header(); ?>
<?php get_template_part( 'page-header' ); ?>


<div class="wrap">
	<div class="container">
		<div class="row">
			<!-- Main -->
			<main id="content" role="main" class="col-lg">
				<?php basexyz_post_content(); ?>
			</main><!-- #content -->

			<!-- Include: Sidebar -->
			<?php get_template_part( 'sidebar' ); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrap -->

<?php get_footer();