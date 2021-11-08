<?php
/**
 * Filters
 *
 * Filtering native WordPress and third-party plugins' functions.
 *
 * @package Uppercase
 */

if ( ! function_exists( 'csco_body_class' ) ) {
	/**
	 * Adds classes to <body> tag
	 *
	 * @param array $classes is an array of all body classes.
	 */
	function csco_body_class( $classes ) {

		if ( csco_is_content_fullwidth() ) {
			$classes[] = 'cs-fullwidth-content';
			$classes[] = 'cs-area-overlay-content';
		}

		if ( 'top' === get_theme_mod( 'misc_align_content' ) ) {
			$classes[] = 'cs-vertical-align-content-top';
		}

		return $classes;

	}
}
add_filter( 'body_class', 'csco_body_class' );

if ( ! function_exists( 'csco_set_allowed_post_meta' ) ) {
	/**
	 * Set allowed post meta.
	 *
	 * @param array $allowed The list meta.
	 */
	function csco_set_allowed_post_meta( $allowed ) {
		$allowed['shares'] = esc_html__( 'Shares', 'uppercase' );

		return $allowed;
	}
}
add_filter( 'powerkit_allowed_post_meta', 'csco_set_allowed_post_meta' );
add_filter( 'canvas_allowed_post_meta', 'csco_set_allowed_post_meta' );
add_filter( 'abr_allowed_post_meta', 'csco_set_allowed_post_meta' );

if ( ! function_exists( 'csco_set_convert_post_meta' ) ) {
	/**
	 * Convert allowed post meta.
	 *
	 * @param array $list The list meta.
	 */
	function csco_set_convert_post_meta( $list ) {
		$allowed['shares'] = 'showMetaShares';

		return $list;
	}
}
add_filter( 'abr_convert_post_meta', 'csco_set_convert_post_meta' );

if ( ! function_exists( 'csco_set_post_meta_handler' ) ) {
	/**
	 * Set post meta handler.
	 */
	function csco_set_post_meta_handler() {
		return 'csco_get_post_meta';
	}
}
add_filter( 'powerkit_get_post_meta_handler', 'csco_set_post_meta_handler' );
add_filter( 'canvas_get_post_meta_handler', 'csco_set_post_meta_handler' );
add_filter( 'abr_get_post_meta_handler', 'csco_set_post_meta_handler' );

if ( ! function_exists( 'csco_set_block_post_meta_handler' ) ) {
	/**
	 * Set post meta handler.
	 */
	function csco_set_block_post_meta_handler() {
		return 'csco_block_post_meta';
	}
}
add_filter( 'powerkit_get_block_post_meta_handler', 'csco_set_block_post_meta_handler' );
add_filter( 'canvas_get_block_post_meta_handler', 'csco_set_block_post_meta_handler' );
add_filter( 'abr_get_block_post_meta_handler', 'csco_set_block_post_meta_handler' );

if ( ! function_exists( 'csco_filter_label_more' ) ) {
	/**
	 * Output label for more link / button.
	 *
	 * @param string $label The label of button.
	 */
	function csco_filter_label_more( $label ) {

		if ( ! $label ) {
			$label = get_theme_mod( 'misc_label_more', esc_html__( 'Read More', 'uppercase' ) );
		}

		return $label;
	}
}
add_filter( 'csco_filter_label_more', 'csco_filter_label_more' );

if ( ! function_exists( 'csco_add_entry_class' ) ) {
	/**
	 * Add entry class to post_class
	 *
	 * @param array $classes One or more classes to add to the class list.
	 */
	function csco_add_entry_class( $classes ) {

		array_push( $classes, 'cs-entry', 'cs-video-wrap' );

		return $classes;
	}
}
add_filter( 'post_class', 'csco_add_entry_class' );

if ( ! function_exists( 'csco_remove_hentry_class' ) ) {
	/**
	 * Remove hentry from post_class
	 *
	 * @param array $classes One or more classes to add to the class list.
	 */
	function csco_remove_hentry_class( $classes ) {
		return array_diff( $classes, array( 'hentry' ) );
	}
}
add_filter( 'post_class', 'csco_remove_hentry_class' );

if ( ! function_exists( 'csco_theme_typography' ) ) {
	/**
	 * Output theme typography
	 */
	function csco_theme_typography() {
		require get_template_directory() . '/inc/typography.php';
	}
}
add_filter( 'admin_head', 'csco_theme_typography' );
add_filter( 'wp_head', 'csco_theme_typography' );

if ( ! function_exists( 'csco_overwrite_sidebar' ) ) {
	/**
	 * Overwrite Default Sidebar
	 *
	 * @param string $sidebar Sidebar slug.
	 */
	function csco_overwrite_sidebar( $sidebar ) {
		// Check Nonce.
		wp_verify_nonce( null );

		if ( isset( $_REQUEST['action'] ) && 'csco_ajax_load_nextpost' === $_REQUEST['action'] ) { // Input var ok.
			if ( is_active_sidebar( 'sidebar-loaded' ) ) {
				$sidebar = 'sidebar-loaded';
			}
		}
		return $sidebar;
	}
}
add_filter( 'csco_sidebar', 'csco_overwrite_sidebar' );

if ( ! function_exists( 'csco_tiny_mce_refresh_cache' ) ) {
	/**
	 * TinyMCE Refresh Cache.
	 *
	 * @param array $settings An array with TinyMCE config.
	 */
	function csco_tiny_mce_refresh_cache( $settings ) {

		$theme = wp_get_theme();

		$settings['cache_suffix'] = sprintf( 'v=%s', $theme->get( 'Version' ) );

		return $settings;
	}
}
add_filter( 'tiny_mce_before_init', 'csco_tiny_mce_refresh_cache' );

if ( ! function_exists( 'csco_max_srcset_image_width' ) ) {
	/**
	 * Changes max image width in srcset attribute
	 *
	 * @param int   $max_width  The maximum image width to be included in the 'srcset'. Default '1600'.
	 * @param array $size_array Array of width and height values in pixels (in that order).
	 */
	function csco_max_srcset_image_width( $max_width, $size_array ) {
		return 3840;
	}
}
add_filter( 'max_srcset_image_width', 'csco_max_srcset_image_width', 10, 2 );

if ( ! function_exists( 'csco_get_the_archive_title' ) ) {
	/**
	 * Archive Title
	 *
	 * Removes default prefixes, like "Category:" from archive titles.
	 *
	 * @param string $title Archive title.
	 */
	function csco_get_the_archive_title( $title ) {
		if ( is_category() ) {

			$title = single_cat_title( '', false );

		} elseif ( is_tag() ) {

			$title = single_tag_title( '', false );

		} elseif ( is_author() ) {

			$title = get_the_author( '', false );

		}
		return $title;
	}
}
add_filter( 'get_the_archive_title', 'csco_get_the_archive_title' );

if ( ! function_exists( 'csco_excerpt_length' ) ) {
	/**
	 * Excerpt Length
	 *
	 * @param string $length of the excerpt.
	 */
	function csco_excerpt_length( $length ) {
		return 18;
	}
}
add_filter( 'excerpt_length', 'csco_excerpt_length' );

if ( ! function_exists( 'csco_strip_shortcode_from_excerpt' ) ) {
	/**
	 * Strip shortcodes from excerpt
	 *
	 * @param string $content Excerpt.
	 */
	function csco_strip_shortcode_from_excerpt( $content ) {
		$content = strip_shortcodes( $content );
		return $content;
	}
}
add_filter( 'the_excerpt', 'csco_strip_shortcode_from_excerpt' );

if ( ! function_exists( 'csco_strip_tags_from_excerpt' ) ) {
	/**
	 * Strip HTML from excerpt
	 *
	 * @param string $content Excerpt.
	 */
	function csco_strip_tags_from_excerpt( $content ) {
		$content = strip_tags( $content );
		return $content;
	}
}
add_filter( 'the_excerpt', 'csco_strip_tags_from_excerpt' );

if ( ! function_exists( 'csco_excerpt_more' ) ) {
	/**
	 * Excerpt Suffix
	 *
	 * @param string $more suffix for the excerpt.
	 */
	function csco_excerpt_more( $more ) {
		return '&hellip;';
	}
}
add_filter( 'excerpt_more', 'csco_excerpt_more' );

if ( ! function_exists( 'csco_post_meta_process' ) ) {
	/**
	 * Pre processing post meta choices
	 *
	 * @param array $data Post meta list.
	 */
	function csco_post_meta_process( $data ) {
		if ( ! csco_powerkit_module_enabled( 'share_buttons' ) && isset( $data['shares'] ) ) {
			unset( $data['shares'] );
		}
		if ( ! csco_powerkit_module_enabled( 'reading_time' ) && isset( $data['reading_time'] ) ) {
			unset( $data['reading_time'] );
		}
		if ( ! csco_post_views_enabled() && isset( $data['views'] ) ) {
			unset( $data['views'] );
		}
		return $data;
	}
}
add_filter( 'csco_post_meta_choices', 'csco_post_meta_process' );

if ( ! function_exists( 'csco_wrap_post_gallery' ) ) {
	/**
	 * Alignment of Galleries in Classic Block
	 *
	 * @param string $html     The current output.
	 * @param array  $attr     Attributes from the gallery shortcode.
	 * @param int    $instance Numeric ID of the gallery shortcode instance.
	 */
	function csco_wrap_post_gallery( $html, $attr, $instance ) {
		switch ( get_theme_mod( 'misc_classic_gallery_alignment', 'default' ) ) {
			case 'wide':
				$wrap = 'alignwide';
				break;
			case 'large':
				$wrap = 'alignfull';
				break;
		}

		if ( ! isset( $attr['wrap'] ) && isset( $wrap ) ) {
			$attr['wrap'] = $wrap;

			// Our custom HTML wrapper.
			$html = sprintf( '<div class="%s">%s</div>', esc_attr( $wrap ), gallery_shortcode( $attr ) );
		}

		return $html;
	}
	add_filter( 'post_gallery', 'csco_wrap_post_gallery', 99, 3 );
}

if ( ! function_exists( 'csco_wp_link_pages_args' ) ) {
	/**
	 * Paginated Post Pagination
	 *
	 * @param string $args Paginated posts pagination args.
	 */
	function csco_wp_link_pages_args( $args ) {
		if ( 'next_and_number' === $args['next_or_number'] ) {
			global $page, $numpages, $multipage, $more, $pagenow;
			$args['next_or_number'] = 'number';

			$prev = '';
			$next = '';
			if ( $multipage ) {
				if ( $more ) {
					$i = $page - 1;
					if ( $i && $more ) {
						$prev .= _wp_link_page( $i );
						$prev .= $args['link_before'] . $args['previouspagelink'] . $args['link_after'] . '</a>';
					}
					$i = $page + 1;
					if ( $i <= $numpages && $more ) {
						$next .= _wp_link_page( $i );
						$next .= $args['link_before'] . $args['nextpagelink'] . $args['link_after'] . '</a>';
					}
				}
			}
			$args['before'] = $args['before'] . $prev;
			$args['after']  = $next . $args['after'];
		}
		return $args;
	}
}
add_filter( 'wp_link_pages_args', 'csco_wp_link_pages_args' );

if ( ! function_exists( 'csco_post_header_avatar_size' ) ) {
	/**
	 * Set for post header avatar size.
	 *
	 * @param int $size Avatar size.
	 */
	function csco_post_header_avatar_size( $size ) {
		return 40;
	}
}

if ( ! function_exists( 'csco_comment_form_default_fields' ) ) {
	/**
	 * Remove website url field from comment form.
	 *
	 * @param array $fields default fields.
	 */
	function csco_comment_form_default_fields( $fields ) {
		if ( get_theme_mod( 'remove_comment_field_url' ) ) {
			unset( $fields['url'] );
		}
		return $fields;
	}
}
add_filter( 'comment_form_default_fields', 'csco_comment_form_default_fields' );

if ( ! function_exists( 'csco_emulate_large_post_layout' ) ) {
	/**
	 * Emulate large post layout.
	 *
	 * @param string $template The path of the template to include.
	 */
	function csco_emulate_large_post_layout( $template ) {
		global $wp;

		global $cs_archive_singular;

		// Check "Large" layout.
		if ( is_home() && 'posts' === get_option( 'show_on_front', 'posts' ) ) {

			if ( 'large' === get_theme_mod( 'home_layout', 'list' ) ) {
				$cs_archive_singular = true;
			}
		}

		// Emulate singular.
		if ( $cs_archive_singular ) {
			$args = $wp->query_vars;

			// Change global query vars.
			$query_vars = array(
				'posts_per_page'         => 1,
				'cache_results'          => false,
				'update_post_meta_cache' => false,
			);

			$args = array_merge( $args, $query_vars );

			// Init Query.
			$init_query = new WP_Query();

			// Get global query.
			$global_query = $init_query->query( $args );

			// Process result.
			if ( $global_query ) {
				foreach ( $global_query as $item ) {
					wp( array(
						'p' => $item->ID,
					) );

					$template = get_template_directory() . '/singular.php';

					break;
				}
			}
		}

		return $template;
	}
}
add_filter( 'template_include', 'csco_emulate_large_post_layout', 999 );

/**
 * -------------------------------------------------------------------------
 * [ SearchWP Live Ajax Search ]
 * -------------------------------------------------------------------------
 */

if ( ! function_exists( 'csco_searchwp_live_enqueue_scripts' ) ) {
	/**
	 * Enqueue scripts and styles.
	 */
	function csco_searchwp_live_enqueue_scripts() {

		$style = sprintf( '.searchwp-live-search-no-min-chars:before { content: "%s" }', esc_html__( 'Continue typing', 'uppercase' ) );

		wp_add_inline_style( 'searchwp-live-search', $style );
	}
}
add_action( 'wp_enqueue_scripts', 'csco_searchwp_live_enqueue_scripts', 11 );

/**
 * Remove Output the base styles.
 */
add_filter( 'searchwp_live_search_base_styles', '__return_false' );

/**
 * Change live search template dir location.
 */
function csco_searchwp_live_search_template_dir() {
	return 'template-parts';
}
add_filter( 'searchwp_live_search_template_dir', 'csco_searchwp_live_search_template_dir' );

/**
 * Remove from live search spinner lines and wrapper width.
 *
 * @param array $configs Default configuration.
 */
function csco_searchwp_live_search_configs( $configs ) {

	$configs['default']['results']['width']    = '';
	$configs['default']['spinner']['lines']    = '0';
	$configs['default']['spinner']['position'] = 'static';

	return $configs;
}
add_filter( 'searchwp_live_search_configs', 'csco_searchwp_live_search_configs' );

/**
 * -------------------------------------------------------------------------
 * [ Absolute Reviews ]
 * -------------------------------------------------------------------------
 */

/**
 * Set the correct color scheme for post meta.
 *
 * @param string $scheme   Meta scheme.
 * @param array  $settings The advanced settings.
 */
function abr_csco_post_meta_scheme( $scheme, $settings ) {

	if ( isset( $settings['abr-params']['layout'] ) ) {
		$layout = $settings['abr-params']['layout'];

		if ( in_array( $layout, array( 'reviews-6', 'reviews-7', 'reviews-8' ), true ) ) {
			$scheme = 'data-scheme="inverse"';
		}
	}

	return $scheme;
}
add_filter( 'csco_post_meta_scheme', 'abr_csco_post_meta_scheme', 10, 2 );

/**
 * -------------------------------------------------------------------------
 * [ Yoast SEO Breadcrumbs ]
 * -------------------------------------------------------------------------
 */

if ( ! function_exists( 'csco_remove_breadcrumb_title' ) ) {
	/**
	 * Remove the last breadcrumb, the post title, from the Yoast SEO breadcrumbs
	 *
	 * @param array $link The link array.
	 */
	function csco_remove_breadcrumb_title( $link ) {
		if ( get_theme_mod( 'hide_last_breadcrumb', true ) ) {
			if ( false !== strpos( $link, 'breadcrumb_last' ) ) {
				$link = '';
			}
		}
		return $link;
	}
}
add_filter( 'wpseo_breadcrumb_single_link', 'csco_remove_breadcrumb_title' );


/**
 * -------------------------------------------------------------------------
 * [ Rank Math SEO Breadcrumbs ]
 * -------------------------------------------------------------------------
 */
if ( ! function_exists( 'csco_replace_breadcrumb_separator' ) ) {
	/**
	 * Change the breadcrumbs HTML output.
	 *
	 * @param string $html HTML output.
	 */
	function csco_replace_breadcrumb_separator( $html ) {
		$html = preg_replace( '#<span class="separator">(.*?)</span>#', '<span class="cs-separator"></span>', $html );
		return $html;
	}
}
add_filter( 'rank_math/frontend/breadcrumb/html', 'csco_replace_breadcrumb_separator' );
