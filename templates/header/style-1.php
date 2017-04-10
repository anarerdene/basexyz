<div id="style-1" <?php basexyz_header_width(); ?>>
	<div class="row align-items-center">
		<!-- Logo -->
		<div class="col">
			<?php basexyz_logo(); ?>
		</div>

		<!-- Primary Navigation -->
		<div id="primary-navigation" role="navigation" class="col-md-auto">
			<?php if (has_nav_menu('nav_primary')): ?>
				<?php wp_nav_menu(array(
					'theme_location' => 'nav_primary',
					'container'      => false,
					'menu_id'        => '',
					'menu_class'     => 'nav-menu',
				));
				?>
			<?php endif ?>
		</div>
	</div>
</div>
