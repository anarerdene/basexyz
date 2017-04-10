<div>
	<!-- Thumb -->
	<?php if ( has_post_thumbnail() ): ?>
		<?php basexyz_thumbnail('basexyz-2x1-m'); ?>
	<?php endif; ?>

	<!-- Title -->
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

</div>



