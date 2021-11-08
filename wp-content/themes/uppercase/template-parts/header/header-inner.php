<?php
/**
 * The template part for displaying header inner.
 *
 * @package Uppercase
 */

$header_class = 'cs-page__header';

if ( is_singular( 'post' ) ) {
	$header_class = 'cs-entry__header cs-entry__header-standard';
}

// If description exists.
if ( get_the_archive_description() ) {
	$header_class .= ' cs-page__header-has-description';
}

?>

<div class="<?php echo esc_attr( $header_class ); ?>">

	<?php
	if ( is_singular() ) {

		while ( have_posts() ) :
			the_post();

			if ( is_singular( 'post' ) ) {
				?>
				<div class="cs-entry__header-inner">

					<div class="cs-entry__header-info">

						<div class="cs-entry__header-info-inner">

							<div class="cs-entry__header-description cs-entry__title-current cs-active-prev-next">
								<?php
									csco_get_post_meta( 'category', false, true, 'post_meta' );
									the_title( '<h1 class="cs-entry__title"><span>', '</span></h1>' );
								?>
							</div>

							<?php do_action( 'csco_entry_header_info_end' ); ?>

						</div>
						<?php
						if ( ! csco_get_state_load_nextpost() && get_theme_mod( 'post_prev_next', true ) ) {
							$prev_post = get_previous_post();
							$next_post = get_next_post();

							if ( $prev_post || $next_post ) {
								?>
								<div class="cs-entry__prev-next">
									<div class="cs-entry__prev-next-move">
										<?php previous_post_link( '<div class="cs-entry__prev-next-label cs-entry__prev-label">%link</div>', esc_html__( 'Previous article', 'uppercase' ), false ); ?>
										<?php next_post_link( '<div class="cs-entry__prev-next-label cs-entry__next-label">%link</div>', esc_html__( 'Next article', 'uppercase' ), false ); ?>
									</div>
								</div>
								<?php
							}
						}
						?>

					</div>

				</div>
				<?php

			} else {
				the_title( '<h1 class="cs-page-header-title">', '</h1>' );
				if ( is_front_page() ) {
					csco_component( 'additional_nav_menu' );
				}
			}

		endwhile;

	} elseif ( is_author() ) {

		$subtitle  = esc_html__( 'All Posts By', 'uppercase' );
		$author_id = get_queried_object_id();
		?>
		<div class="cs-page__author">
			<div class="cs-page__author-photo">
				<div  class="cs-page__author-thumbnail">
					<?php echo get_avatar( $author_id, 100 ); ?>
				</div>
				<?php if ( csco_powerkit_module_enabled( 'social_links' ) ) { ?>
					<div class="cs-page__author-social">
						<?php powerkit_author_social_links( $author_id ); ?>
					</div>
				<?php } ?>
			</div>
			<div class="cs-page__author-info">
				<?php
					the_archive_title( '<h1 class="cs-page__title">', '</h1>' );
					csco_archive_post_count();
					csco_archive_post_description();
				?>
			</div>
		</div>

		<?php
	} elseif ( is_archive() ) {

		the_archive_title( '<h1 class="cs-page-header-title">', '</h1>' );

		// Add special subtitles.
		if ( is_category() ) {
			$subtitle = esc_html__( 'Browsing Category', 'uppercase' );
		} elseif ( is_tag() ) {
			$subtitle = esc_html__( 'Browsing Tag', 'uppercase' );
		} else {
			$subtitle = '';
		}

		// Add a subtitle.
		if ( $subtitle ) {
			?>
			<span class="cs-page__subtitle"><?php echo esc_html( $subtitle ); ?></span>
			<?php
		}

		csco_archive_post_count();
		csco_archive_post_description();
		csco_subcategories();

	} elseif ( is_search() ) {

		?>
		<span class="cs-page__subtitle"><?php esc_html_e( 'Search Results', 'uppercase' ); ?></span>
		<h1 class="cs-page-header-title"><?php echo get_search_query(); ?></h1>
		<?php
		csco_archive_post_count();

	} elseif ( is_404() ) {
		?>
		<h1 class="cs-page-header-title"><?php esc_html_e( '404', 'uppercase' ); ?></h1>
		<?php
		csco_component( 'additional_nav_menu' );
	} else {
		if ( is_home() && ! is_front_page() ) {
			?>
			<h1 class="cs-page-header-title"><?php single_post_title(); ?></h1>
			<?php
		} else {
			$header_title = get_theme_mod( 'hero_title', get_bloginfo( 'description' ) );
			if ( $header_title ) {
				?>
				<h1 class="cs-page-header-title"><?php echo wp_kses_post( $header_title ); ?></h1>
				<?php
			}
		}
		if ( is_front_page() ) {
			csco_component( 'additional_nav_menu' );
		}
	}

	do_action( 'csco_header_inner_end' );

	?>

</div>
