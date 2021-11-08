<?php
/**
 * Footer template part.
 *
 * @package AMP
 */

/**
 * Context.
 *
 * @var AMP_Post_Template $this
 */
?>


<footer class="amp-wp-footer">
	<div class="site-info">
		<div class="site-title footer-title"><?php bloginfo( 'name' ); ?></div>

		<?php
		/* translators: %s: Author name. */
		$footer_text = get_theme_mod( 'footer_text', sprintf( esc_html__( 'Designed & Developed by %s', 'uppercase' ), '<a href="' . esc_url( csco_get_theme_data( 'AuthorURI' ) ) . '">Code Supply Co.</a>' ) );
		if ( $footer_text ) {
			?>
			<div class="footer-copyright">
				<?php echo wp_kses_post( $footer_text ); ?>
			</div>
			<?php
		}
		?>
	</div><!-- .site-info -->
</footer>
