<?php
/**
 * The template part for displaying post prev next image.
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
		if ( has_post_thumbnail( $prev_post ) ) {
			?>
			<div class="cs-page-header-background__inner cs-page-header-background__inner-prev">
				<?php echo get_the_post_thumbnail( $prev_post, 'csco-large-uncropped' ); ?>
			</div>
			<?php
		}
		wp_reset_postdata();
	}

	// Next post.
	if ( $next_post ) {
		$post = $next_post;
		setup_postdata( $post );
		if ( has_post_thumbnail( $next_post ) ) {
			?>
			<div class="cs-page-header-background__inner cs-page-header-background__inner-next">
				<?php echo get_the_post_thumbnail( $next_post, 'csco-large-uncropped' ); ?>
			</div>
			<?php
		}
		wp_reset_postdata();
	}
}
