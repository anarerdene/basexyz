<!-- Include: Header -->
<?php get_header(); ?>

<!-- Begin: Main Content -->
<div id="content">
	<div class="wrapper container">
		<!-- Begin: Content -->
		<div class="container-fluid">
			<main id="main-content" role="main">
				<div class="errorpage row">
					<div class="col-sm-6 col-sm-offset-3">
						<h1>404</h1>
						<h2><?php esc_html_e( 'Page not found', 'basexyz' ); ?></h2>
						<?php get_search_form(); ?>
					</div>
				</div>
			</main>
		</div>
		<!-- End: Content -->
	</div>
</div>
<!-- End: Main Content -->

<!-- Include: Footer -->
<?php get_footer(); ?>
