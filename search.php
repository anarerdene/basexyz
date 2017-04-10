<?php get_header(); ?>

<!-- Page Header -->
<?php basexyz_page_header(); ?>

<!-- Header Slider -->
<?php basexyz_header_slider(); ?>

<!-- Main Container -->
<div class="wrap">
	<div class="container">
		<div class="row">
			<!-- Main -->
			<main id="content" role="main" class="col-lg">
				<?php basexyz_post_content(); ?>
			</main><!-- #content -->

			<!-- Include: Sidebar -->
			<?php get_sidebar(); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrap -->

<?php get_footer();
