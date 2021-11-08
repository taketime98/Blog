<?php
/**
 * The template part for displaying post prev next section.
 *
 * @package Uppercase
 */

$prev_post = get_previous_post();
$next_post = get_next_post();

if ( $prev_post || $next_post ) {

	// Prev post.
	if ( $prev_post ) {
		$post = $prev_post;

		setup_postdata( $post );
		?>
		<div class="cs-entry__header-description cs-entry__title-prev">
			<?php csco_get_post_meta( array( 'category' ), false, true, 'post_prev_next_meta' ); ?>
			<h2 class="cs-entry__title">
				<span><?php echo esc_html( get_the_title( $prev_post ) ); ?></span>
			</h2>
		</div>
		<?php
		wp_reset_postdata();
	}

	// Next post.
	if ( $next_post ) {
		$post = $next_post;

		setup_postdata( $post );
		?>
		<div class="cs-entry__header-description cs-entry__title-next">
			<?php csco_get_post_meta( array( 'category' ), false, true, 'post_prev_next_meta' ); ?>
			<h2 class="cs-entry__title">
				<span><?php echo esc_html( get_the_title( $next_post ) ); ?></span>
			</h2>
		</div>
		<?php
		wp_reset_postdata();
	}
	?>

	<?php
}
