<?php
/**
 * Template part for displaying posts
 *
 * @package Uppercase
 */

$image_orientation = $options['image_orientation'];
if ( 'mosaic' === $options['layout'] ) {
	$image_orientation = $options['tile_image_orientation'];
}

$ratio_class = 'cs-overlay-ratio cs-ratio-' . $image_orientation;

?>

<article <?php post_class(); ?>>

	<div class="cs-entry__outer">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="cs-entry__inner cs-entry__overlay cs-entry__thumbnail <?php echo esc_attr( $ratio_class ); ?>" data-scheme="inverse">

				<div class="cs-overlay-background">
					<?php the_post_thumbnail( $options['image_size'] ); ?>
				</div>

				<?php
				if ( $options['video_backgrounds'] ) {
					csco_the_post_video();
				}
				?>

				<?php csco_the_post_format_icon(); ?>

				<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>
			</div>
		<?php } ?>

		<div class="cs-entry__inner cs-entry__content">
			<?php
			csco_get_post_meta( array( 'category' ), false, true, $options['meta'] );

			the_title( '<h2 class="cs-entry__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );

			if ( $options['excerpt'] ) {
				$post_excerpt = get_the_excerpt();
				if ( $post_excerpt ) {
					?>
					<div class="cs-entry__excerpt">
						<?php echo wp_kses_post( $post_excerpt ); ?>
					</div>
					<?php
				}
			}

			csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'comments', 'reading_time' ), false, true, $options['meta'] );
			?>

		</div>
	</div>

</article>
