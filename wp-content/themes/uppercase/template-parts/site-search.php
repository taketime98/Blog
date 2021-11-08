<?php
/**
 * The template part for displaying site section.
 *
 * @package Uppercase
 */

$scheme = csco_color_scheme(
	get_theme_mod( 'color_component_background', 'rgba(255,255,255,0.8)' ),
	get_theme_mod( 'color_component_background_dark', 'rgba(0,0,0,0.5)' )
);

?>

<div class="cs-search cs-component" <?php echo wp_kses( $scheme, 'post' ); ?>>

	<form role="search" method="get" class="cs-search__nav-form cs-show-wrapper" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="cs-search__group">
			<input data-swpparentel=".cs-search-live-result" required class="cs-search__input" data-swplive="true" type="search" value="<?php the_search_query(); ?>" name="s" placeholder="<?php echo esc_attr( get_theme_mod( 'misc_search_placeholder', __( 'Type to Search', 'uppercase' ) ) ); ?>">
			<button class="cs-search__close">
				<i class="cs-icon cs-icon-x"></i>
			</button>
		</div>
	</form>

	<div class="cs-search__inner">

		<div class="cs-search-live-result"></div>

		<?php
		if ( get_theme_mod( 'header_search_posts', true ) ) {

			$args = array(
				'orderby'             => get_theme_mod( 'header_search_posts_orderby', 'date' ),
				'order'               => get_theme_mod( 'header_search_posts_order', 'DESC' ),
				'post_type'           => 'post',
				'ignore_sticky_posts' => true,
				'posts_per_page'      => get_theme_mod( 'header_search_posts_perpage', 3 ),
			);

			$options = array(
				'image_orientation' => get_theme_mod( 'header_search_image_orientation', 'square' ),
				'image_size'        => get_theme_mod( 'header_search_image_size', 'csco-small' ),
			);

			// WP Query.
			$items = new WP_Query( $args );

			if ( $items->have_posts() ) {
				?>
				<div class="cs-search__posts">
					<h5 class="cs-section-heading cs-show-wrapper">
						<span><?php echo esc_html( get_theme_mod( 'header_search_posts_heading', __( 'Popular Now', 'uppercase' ) ) ); ?></span>
					</h5>
					<div class="cs-search__posts-wrapper cs-show-wrapper">
						<?php
						while ( $items->have_posts() ) {
							$items->the_post();
							?>
							<article <?php post_class(); ?>>
								<div class="cs-entry__outer">
									<?php if ( has_post_thumbnail() ) { ?>
										<div class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay cs-overlay-ratio cs-ratio-<?php echo esc_attr( $options['image_orientation'] ); ?>">
											<div class="cs-overlay-background cs-overlay-transparent">
												<?php the_post_thumbnail( $options['image_size'] ); ?>
											</div>

											<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>
										</div>
									<?php } ?>

									<div class="cs-entry__inner cs-entry__content">
										<?php csco_get_post_meta( array( 'category' ), false, true, 'header_search_posts_meta' ); ?>

										<?php the_title( '<h6 class="cs-entry__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h6>' ); ?>

										<?php csco_get_post_meta( array( 'author', 'date', 'comments', 'views', 'shares', 'reading_time' ), false, true, 'header_search_posts_meta' ); ?>
									</div>
								</div>
							</article>
						<?php } ?>
					</div>
				</div>
				<?php
			}

			wp_reset_postdata();
		}
		?>

		<?php
		if ( get_theme_mod( 'header_search_tags', true ) ) {
			$tags = get_terms( array(
				'taxonomy'   => 'post_tag',
				'number'     => get_theme_mod( 'header_search_tags_number', 10 ),
				'order'      => get_theme_mod( 'header_search_tags_order', 'DESC' ),
				'orderby'    => get_theme_mod( 'heder_search_tags_orderby', 'date' ),
				'hide_empty' => false,
			) );

			if ( $tags && ! is_wp_error( $tags ) ) {
				?>
				<div class="cs-search__tags-wrapper">
					<div class="cs-search__tags">
						<ul class="cs-show-wrapper">
							<?php foreach ( $tags as $item ) { ?>
								<li>
									<a href="<?php echo esc_url( get_term_link( $item->term_id ) ); ?>" rel="tag">
										<?php echo esc_attr( $item->name ); ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<?php
			}
		}
		?>

	</div>

</div>
