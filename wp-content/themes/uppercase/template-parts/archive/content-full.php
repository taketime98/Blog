<?php
/**
 * Template part for displaying full posts
 *
 * @package Uppercase
 */

// Thumbnail size.
$thumbnail_size = 'csco-medium';

if ( 'uncropped' === csco_get_page_preview() ) {
	$thumbnail_size = sprintf( '%s-uncropped', $thumbnail_size );
}

?>

<article <?php post_class(); ?>>

	<div class="cs-entry__outer">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="cs-entry__inner cs-entry__overlay cs-entry__thumbnail cs-overlay-ratio cs-ratio-<?php echo esc_attr( $options['image_orientation'] ); ?>" data-scheme="inverse">

				<div class="cs-overlay-background cs-overlay-transparent">
					<?php the_post_thumbnail( $thumbnail_size ); ?>
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

				if ( $post_excerpt && 'summary' === $options['summary_type'] ) {
					?>
					<div class="cs-entry__excerpt">
						<?php echo wp_kses_post( wpautop( $post_excerpt ) ); ?>
					</div>
					<?php
					if ( $options['more_button'] ) {
						?>
							<div class="cs-entry__read-more">
								<a class="cs-button" href="<?php echo esc_url( get_permalink() ); ?>">
									<?php echo esc_html( apply_filters( 'csco_filter_label_more', null ) ); ?>
								</a>
							</div>
						<?php
					}
					?>
					<?php
				}

				if ( 'content' === $options['summary_type'] ) {
					?>
					<div class="cs-entry-type-summary" >
						<?php
						$more_link_text = false;

						if ( $options['more_button'] ) {
							$more_link_text = sprintf(
								/* translators: %s: Name of current post */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'uppercase' ),
								get_the_title()
							);
						}

						the_content( $more_link_text );
						?>
					</div>
					<?php
				}
			}

			csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'comments', 'reading_time' ), false, true, $options['meta'] );
			?>

		</div>
	</div>

</article>
