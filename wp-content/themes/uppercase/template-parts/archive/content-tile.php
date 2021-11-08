<?php
/**
 * Template part for displaying tile posts
 *
 * @package Uppercase
 */

$layout         = get_theme_mod( csco_get_archive_option( 'layout' ) );
$post_meta      = $options['meta'];
$option_excerpt = $options['excerpt'];
$ratio_class    = ' cs-ratio-' . $options['tile_image_orientation'];
$image_size     = $options['image_size'];
$size_class     = ' cs-entry__outer-half';
$current        = $options['current_post'];

if ( isset( $options['image_size_full'] ) && 'tile-mixed' === $layout ) {
	if ( ( $current % 3 ) === 1 ) {
		$post_meta      = $options['large_meta'];
		$option_excerpt = $options['large_excerpt'];
		$image_size     = $options['image_size_full'];
		$size_class     = ' cs-entry__outer-full';
		// Add large image orientation.
		$ratio_class = ' cs-ratio-' . $options['tile_large_image_orientation'];
	}
}

if ( 'mosaic' !== $options['layout'] ) {
	$entry_overlay_class = $ratio_class . $size_class;
}

$overlay_type  = get_theme_mod( 'tile_overlay_type', 'solid' );
$overlay_class = ' cs-overlay-' . $overlay_type;
if ( 'gradient' === $overlay_type ) {
	$overlay_class = $overlay_class . '-top' . $overlay_class . '-bottom';
}

?>

<article <?php post_class( 'cs-entry-overlay' ); ?>>

	<div class="cs-entry__outer cs-entry__overlay cs-overlay-ratio<?php echo esc_attr( $entry_overlay_class ); ?>" <?php csco_post_item_scheme(); ?>>

		<div class="cs-entry__inner cs-entry__thumbnail">
			<div class="cs-overlay-background <?php echo esc_attr( $overlay_class ); ?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<?php the_post_thumbnail( $image_size ); ?>
				<?php } ?>

				<?php
				if ( $options['video_backgrounds'] ) {
					csco_the_post_video();
				}
				?>
			</div>
		</div>

		<div class="cs-entry__inner cs-overlay-content cs-entry__content">

			<?php
			csco_get_post_meta( array( 'category' ), false, true, $post_meta );

			the_title( '<h2 class="cs-entry__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );

			if ( $option_excerpt ) {
				$post_excerpt = get_the_excerpt();
				if ( $post_excerpt ) {
					?>
						<div class="cs-entry__excerpt">
							<?php echo wp_kses_post( $post_excerpt ); ?>
						</div>
					<?php
				}
			}

			csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'comments', 'reading_time' ), false, true, $post_meta );
			?>

		</div>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>
	</div>
</article>
