<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Uppercase
 */

get_header();

do_action( 'csco_main_before' );

if ( have_posts() ) :

	// Set options.
	$options = csco_get_archive_options();

	// Layout.

	$layout   = $options['layout'];
	$template = $layout;

	// Custom template slug.
	if ( 'mosaic-two' === $layout ) {
		$template = 'list-fullwidth';
	}

	// Post area classes.
	$main_classes = 'cs-posts-area__main';

	if ( 'full' === $layout || 'list' === $layout || 'mosaic-two' === $layout || 'grid' === $layout || 'tile-mixed' === $layout || 'mosaic' === $layout ) {
		$main_classes .= ' cs-posts-area__' . $layout;
	}

	if ( 'tile' === $layout || 'tile-two' === $layout ) {
		$template      = 'tile';
		$main_classes .= ' cs-posts-area__grid';
	}

	if ( 'tile-mixed' === $layout ) {
		$template = 'tile';
	}

	if ( 'grid-fullwidth' === $layout ) {
		$main_classes .= ' cs-posts-area__grid cs-posts-area__' . $layout;
	}

	if ( 'full-fullwidth' === $layout ) {
		$template      = 'full';
		$main_classes .= ' cs-posts-area__full cs-posts-area__' . $layout;
	}

	// Image Width class.
	if ( $options['image_width'] && ( 'list' === $options['layout'] ) ) {
		$main_classes .= ' cs-posts-area__image-width-' . $options['image_width'];
	}

	?>

	<div class="cs-posts-area">

		<div class="cs-posts-area__outer">

			<div class="<?php echo esc_attr( $main_classes ); ?>">

				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();

					// Counter.
					$current                 = $wp_query->current_post + 1;
					$options['current_post'] = $current;

					set_query_var( 'options', $options );

					get_template_part( 'template-parts/archive/content', $template );

				endwhile;
				?>

			</div>

		</div>

		<?php
		/* Posts Pagination */
		if ( 'standard' === get_theme_mod( csco_get_archive_option( 'pagination_type' ), 'load-more' ) ) {
			?>
			<div class="cs-posts-area__pagination">
				<?php
					the_posts_pagination(
						array(
							'prev_text' => esc_html__( 'Previous', 'uppercase' ),
							'next_text' => esc_html__( 'Next', 'uppercase' ),
						)
					);
				?>
			</div>
			<?php
		}
		?>

	</div>

	<?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif;

do_action( 'csco_main_after' );

get_footer();
