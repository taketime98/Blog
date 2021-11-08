<?php
/**
 * Template Tags
 *
 * Functions that are called directly from template parts or within actions.
 *
 * @package Uppercase
 */

if ( ! function_exists( 'csco_header_logo' ) ) {
	/**
	 * Header Logo
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_logo( $settings = array() ) {

		$logo_default_name = 'logo';
		$logo_dark_name    = 'logo_dark';
		$logo_class        = null;

		$settings = array_merge( array(
			'variant' => null,
		), $settings );

		// Get default logo.
		$logo_id = get_theme_mod( $logo_default_name );

		// Set mode of logo.
		$logo_mode = 'cs-logo-once';

		// Check display mode.
		if ( $logo_id ) {
			$logo_mode = 'cs-logo-default';
		}
		?>
		<div class="cs-logo <?php echo esc_attr( 'hide' === $settings['variant'] ? 'cs-logo-hide' : null ); ?>">
			<a class="cs-header__logo <?php echo esc_attr( $logo_mode ); ?> <?php echo esc_attr( $logo_class ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
				if ( $logo_id ) {
					csco_get_retina_image( $logo_id, array( 'alt' => get_bloginfo( 'name' ) ) );
				} else {
					bloginfo( 'name' );
				}
				?>
			</a>

			<?php
			if ( 'cs-logo-default' === $logo_mode ) {

				$logo_dark_id = get_theme_mod( $logo_dark_name ) ? get_theme_mod( $logo_dark_name ) : $logo_id;

				if ( $logo_dark_id ) {
					?>
						<a class="cs-header__logo cs-logo-dark <?php echo esc_attr( $logo_class ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php csco_get_retina_image( $logo_dark_id, array( 'alt' => get_bloginfo( 'name' ) ) ); ?>
						</a>
					<?php
				}
			}
			?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_header_search_toggle' ) ) {
	/**
	 * Header Search Toggle
	 */
	function csco_header_search_toggle() {
		if ( ! get_theme_mod( 'header_search_button', true ) ) {
			return;
		}
		?>
		<span class="cs-header__search-toggle" role="button">
			<i class="cs-icon cs-icon-search"></i>
			<span class="cs-header__search-label"><?php esc_html_e( 'Search', 'uppercase' ); ?></span>
		</span>
		<?php
	}
}

if ( ! function_exists( 'csco_header_menu_toggle' ) ) {
	/**
	 * Header Menu Toggle
	 */
	function csco_header_menu_toggle() {
		if ( ! get_theme_mod( 'header_menu_button', true ) ) {
			return;
		}
		?>
		<span class="cs-header__menu-toggle" role="button"><?php esc_html_e( 'Menu', 'uppercase' ); ?></span>
		<?php
	}
}

if ( ! function_exists( 'csco_hero_background' ) ) {
	/**
	 * Hero Background Image
	 */
	function csco_hero_background() {

		if ( ! csco_has_hero_background() ) {
			return;
		}

		$page_header_bg_class = 'cs-page-header-background';
		$overlay_type         = get_theme_mod( 'hero_overlay_type', 'gradient' );
		if ( 'transparent' !== $overlay_type ) {
			$overlay_class = 'cs-overlay-' . $overlay_type;
			if ( 'gradient' === $overlay_type ) {
				$overlay_class = $overlay_class . '-top ' . $overlay_class . '-bottom';
			}
			$page_header_bg_class .= ' ' . $overlay_class;
		}

		?>
			<div class="<?php echo esc_attr( $page_header_bg_class ); ?>">

				<?php
				if ( is_singular( 'post' ) ) {
					?>
					<div class="cs-page-header-background__inner cs-page-header-background__inner-current cs-active-prev-next">
						<?php csco_the_hero_image(); ?>
					</div>
					<?php csco_component( 'entry_prev_next_image' ); ?>
					<?php
				} else {
					csco_the_hero_image();
				}
				?>

				<?php csco_the_hero_video(); ?>

			</div>
		<?php
	}
}

if ( ! function_exists( 'csco_hero_nav_menu' ) ) {

	/**
	 * Hero Nav Menu
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_hero_nav_menu( $settings = array() ) {
		if ( ! get_theme_mod( 'hero_navigation_menu', true ) ) {
			return;
		}

		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container'       => 'nav',
					'container_class' => 'cs-menu__nav cs-menu__nav-main',
					'menu_class'      => 'cs-menu__nav-inner cs-show-wrapper',
				)
			);
		}
	}
}

if ( ! function_exists( 'csco_secondary_nav_menu' ) ) {
	/**
	 * Secondary Nav Menu
	 */
	function csco_secondary_nav_menu() {

		if ( get_theme_mod( 'header_secondary_menu', true ) ) {
			if ( has_nav_menu( 'secondary' ) ) {
				wp_nav_menu(
					array(
						'theme_location'  => 'secondary',
						'depth'           => 1,
						'container'       => 'nav',
						'container_class' => 'cs-menu__nav cs-menu__nav-horizontal',
						'menu_class'      => 'cs-menu__nav-inner cs-show-wrapper',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					)
				);
			}
		}
	}
}

if ( ! function_exists( 'csco_additional_nav_menu' ) ) {
	/**
	 * Secondary Nav Menu
	 */
	function csco_additional_nav_menu() {

		if ( get_theme_mod( 'hero_additional_menu', true ) ) {
			if ( has_nav_menu( 'additional' ) ) {
				wp_nav_menu(
					array(
						'theme_location'  => 'additional',
						'depth'           => 1,
						'container'       => 'div',
						'container_class' => 'cs-entry__category',
						'menu_class'      => 'post-categories',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					)
				);
			}
		}
	}
}

if ( ! function_exists( 'csco_topbar_scheme_toggle' ) ) {
	/**
	 * Header Scheme Toggle
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_topbar_scheme_toggle( $settings = array() ) {
		if ( ! get_theme_mod( 'color_scheme_toggle', true ) ) {
			return;
		}
		?>
			<span role="button" class="cs-header__scheme-toggle cs-site-scheme-toggle">
				<span class="cs-header__scheme-toggle-icons">
					<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-sun"></i>
					<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-moon"></i>
				</span>
				<span class="cs-header__scheme-toggle-label-dark"><?php echo esc_html__( 'Dark', 'uppercase' ); ?></span>
				<span class="cs-header__scheme-toggle-label-light"><?php echo esc_html__( 'Light', 'uppercase' ); ?></span>
			</span>
		<?php
	}
}

if ( ! function_exists( 'csco_header_social_links' ) ) {
	/**
	 * Header Social Links
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_social_links( $settings = array() ) {

		if ( ! get_theme_mod( 'header_social_links', true ) ) {
			return;
		}

		if ( ! csco_powerkit_module_enabled( 'social_links' ) ) {
			return;
		}

		$scheme  = get_theme_mod( 'header_social_links_scheme', 'default' );
		$maximum = get_theme_mod( 'header_social_links_maximum', 3 );
		$counts  = get_theme_mod( 'header_social_links_counts', true );
		?>
		<div class="cs-navbar-social-links">
			<?php powerkit_social_links( false, false, $counts, 'nav', $scheme, 'mixed', $maximum ); ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_is_header_social' ) ) {
	/**
	 * If Is Header Social Links Active
	 */
	function csco_is_header_social() {

		if ( ! get_theme_mod( 'header_social_links', false ) ) {
			return false;
		}

		if ( ! csco_powerkit_module_enabled( 'social_links' ) ) {
			return false;
		}

		return true;

	}
}

if ( ! function_exists( 'csco_the_post_format_icon' ) ) {
	/**
	 * Post Format Icon
	 *
	 * @param string $content After content.
	 */
	function csco_the_post_format_icon( $content = null ) {
		$post_format = get_post_format();

		if ( 'gallery' === $post_format ) {
			$attachments = count(
				(array) get_children(
					array(
						'post_parent' => get_the_ID(),
						'post_type'   => 'attachment',
					)
				)
			);

			$content = $attachments ? sprintf( '<span>%s</span>', $attachments ) : '';
		}

		if ( $post_format ) {
			?>
			<span class="cs-entry-format">
				<a class="cs-format-icon cs-format-<?php echo esc_attr( $post_format ); ?>" href="<?php the_permalink(); ?>">
					<?php echo wp_kses_post( $content ); ?>
				</a>
			</span>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_post_subtitle' ) ) {
	/**
	 * Post Subtitle
	 */
	function csco_post_subtitle() {
		if ( ! is_single() ) {
			return;
		}

		if ( get_theme_mod( 'post_subtitle', true ) ) {
			$subtitle = apply_filters( 'plugins/wp_subtitle/get_subtitle', '', array( // phpcs:ignore
				'before'  => '',
				'after'   => '',
				'post_id' => get_the_ID(),
			) );

			if ( $subtitle ) {
				?>
				<div class="cs-entry__subtitle">
					<?php echo wp_kses_post( $subtitle ); ?>
				</div>
				<?php
			} elseif ( has_excerpt() ) {
				?>
				<div class="cs-entry__subtitle">
					<?php the_excerpt(); ?>
				</div>
				<?php
			}
		}
	}
}

if ( ! function_exists( 'csco_post_author' ) ) {
	/**
	 * Post Author Details
	 *
	 * @param int $id Author ID.
	 */
	function csco_post_author( $id = null ) {
		if ( ! $id ) {
			$id = get_the_author_meta( 'ID' );
		}
		?>
		<div class="cs-entry__author-inner">
			<a href="<?php echo esc_url( get_author_posts_url( $id ) ); ?>" class="cs-entry__author-photo">
				<?php echo get_avatar( $id, '100' ); ?>
			</a>
			<div class="cs-entry__author-info">
				<span class="cs-entry__author-position"><?php esc_html_e( 'Author', 'uppercase' ); ?></span>
				<div class="cs-entry__author-name-wrapper">
					<h4 class="cs-entry__author-name">
						<a href="<?php echo esc_url( get_author_posts_url( $id ) ); ?>">
							<?php the_author_meta( 'display_name', $id ); ?>
						</a>
					</h4>
					<?php if ( csco_powerkit_module_enabled( 'social_links' ) ) { ?>
						<div class="cs-entry__author-social">
							<?php powerkit_author_social_links( $id ); ?>
						</div>
					<?php } ?>
				</div>
				<?php if ( get_the_author_meta( 'description', $id ) ) { ?>
					<div class="cs-entry__author-description"><?php the_author_meta( 'description', $id ); ?></div>
				<?php } ?>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_archive_post_description' ) ) {
	/**
	 * Post Description in Archive Pages
	 */
	function csco_archive_post_description() {
		$description = get_the_archive_description();
		if ( $description ) {
			?>
			<div class="cs-page__archive-description">
				<?php echo do_shortcode( $description ); ?>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_archive_post_count' ) ) {
	/**
	 * Post Count in Archive Pages
	 */
	function csco_archive_post_count() {
		global $wp_query;
		$found_posts = $wp_query->found_posts;
		?>
		<div class="cs-page__archive-count">
			<?php
			/* translators: 1: Singular, 2: Plural. */
			echo esc_html( apply_filters( 'csco_article_full_count', sprintf( _n( '%s post', '%s posts', $found_posts, 'uppercase' ), $found_posts ), $found_posts ) );
			?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_subcategories' ) ) {
	/**
	 * Subcategories
	 */
	function csco_subcategories() {

		if ( false === get_theme_mod( 'category_subcategories', true ) ) {
			return;
		}

		if ( ! is_category() ) {
			return;
		}

		$args = apply_filters(
			'csco_subcategories_args',
			array(
				'parent' => get_query_var( 'cat' ),
			)
		);

		$categories = get_categories( $args );

		if ( $categories ) {
			?>
			<div class="cs-page__subcategories">

				<h5 class="cs-section-heading"><?php esc_html_e( 'Subcategories', 'uppercase' ); ?></h5>

				<div class="cs-page__tags">
					<ul>
						<?php
						foreach ( $categories as $category ) {
							// Translators: category name.
							$title = sprintf( esc_html__( 'View all posts in %s', 'uppercase' ), $category->name );
							$link  = get_category_link( $category->term_id )
							?>
								<li>
									<a href="<?php echo esc_url( $link ); ?>" title="<?php echo esc_attr( $title ); ?>">
										<?php echo esc_html( $category->name ); ?>
									</a>
								</li>
							<?php
						}
						?>
					</ul>
				</div>
			</div>
			<?php
		}
	}
}
