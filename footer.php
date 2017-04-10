</div> <!--Begin: main wrapper -->

<?php
	$footer_options 	= get_theme_mod( 'footer_option', true );
	$footer_column 		= get_theme_mod( 'footer_column', '4' );
	$footer_copyright 	= get_theme_mod( 'footer_copyright', '2017. Arvien Team' );
?>

<!-- Begin Footer -->
<?php if ( esc_attr( $footer_options ) ) : ?>
	<footer id="footer" role="contentinfo" class="footer">
		<div class="container">
			<div class="row">
				<?php for ( $i = 1; $i <= $footer_column; $i++ ) : ?>
					<div class="col">
						<?php dynamic_sidebar( 'footer-sidebar-' . $i ); ?>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</footer><!-- .footer -->
<?php endif ?>
<!-- End Footer -->

<!-- Begin Copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php echo esc_html_e($footer_copyright); ?>
			</div>
		</div>
	</div>
</div> <!-- .copyright -->
<!-- End Copyright -->

<?php wp_footer(); ?>
</body>
</html>
