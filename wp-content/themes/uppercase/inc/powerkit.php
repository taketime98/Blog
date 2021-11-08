<?php
/**
 * Powerkit Filters
 *
 * @package Uppercase
 */

/**
 * Remove Default Styles
 */
add_action( 'wp_enqueue_scripts', function() {
	wp_dequeue_style( 'powerkit-widget-posts' );
} );

/**
 * New Share Buttons Locations
 *
 * @param array $locations List of Locations.
 */
function csco_powerkit_new_share_buttons_locations( $locations = array() ) {

	$locations['after-post'] = array(
		'shares'         => array( 'facebook', 'twitter', 'pinterest' ),
		'name'           => esc_html__( 'After Post Content', 'uppercase' ),
		'location'       => 'after-post',
		'mode'           => 'mixed',
		'before'         => '',
		'after'          => '',
		'display'        => true,
		'fields'         => array(
			'display_total'   => true,
			'display_count'   => true,
			'schemes'         => array( 'simple-light', 'bold-light' ),
			'count_locations' => array( 'inside' ),
		),
		'display_total'  => true,
		'scheme'         => 'simple-light',
		'layout'         => 'simple',
		'count_location' => 'inside',
	);

	$locations['post-meta'] = array(
		'shares'         => array( 'facebook', 'twitter', 'pinterest' ),
		'name'           => esc_html__( 'Post Meta', 'uppercase' ),
		'location'       => 'post-meta',
		'mode'           => 'cached',
		'before'         => '',
		'after'          => '',
		'display'        => true,
		'meta'           => array(
			'icons'  => true,
			'titles' => false,
			'labels' => false,
		),
		// Display only the specified layouts and color schemes.
		'fields'         => array(
			'layouts'         => array( 'simple' ),
			'schemes'         => array( 'simple-light', 'bold-light' ),
			'count_locations' => array( 'inside' ),
		),
		'display_total'  => false,
		'layout'         => 'simple',
		'scheme'         => 'simple-light',
		'count_location' => 'inside',
	);

	return $locations;
}
add_filter( 'powerkit_share_buttons_locations', 'csco_powerkit_new_share_buttons_locations' );

/**
 * Change Share Buttons Locations
 *
 * @param array $locations List of Locations.
 */
function csco_powerkit_change_share_buttons_locations( $locations = array() ) {

	unset( $locations['before-content'] );
	unset( $locations['after-content'] );

	$locations['highlight-text'] = array(
		'shares'        => array( 'facebook', 'twitter', 'pinterest', 'mail' ),
		'name'          => '⚡ Highlight Text',
		'location'      => 'highlight-text',
		'mode'          => 'none',
		'before'        => '',
		'after'         => '',
		'meta'          => array(
			'icons'  => true,
			'titles' => false,
			'labels' => false,
		),
		'fields'        => array(
			'display_total'   => false,
			'display_count'   => false,
			'title_locations' => array(),
			'count_locations' => array(),
			'label_locations' => array(),
			'layouts'         => array( 'simple' ),
			'schemes'         => array( 'simple-light', 'bold-light' ),
		),
		'display_total' => false,
		'layout'        => 'simple',
		'scheme'        => 'simple-light',
		'attrs'         => 'data-scheme="default"',
	);

	$locations['blockquote'] = array(
		'shares'        => array( 'facebook', 'twitter' ),
		'name'          => '⭐ Blockquote',
		'location'      => 'blockquote',
		'mode'          => 'none',
		'before'        => '',
		'after'         => '',
		'meta'          => array(
			'icons'  => true,
			'titles' => false,
			'labels' => true,
		),
		'fields'        => array(
			'display_total'   => false,
			'display_count'   => false,
			'title_locations' => array(),
			'count_locations' => array(),
			'label_locations' => array(),
			'layouts'         => array( 'simple' ),
			'schemes'         => array( 'simple-light', 'bold-light' ),
		),
		'display_total' => false,
		'layout'        => 'simple',
		'scheme'        => 'simple-light',
	);

	$locations['mobile-share'] = array(
		'shares'   => array( 'facebook', 'pinterest', 'twitter', 'mail' ),
		'name'     => '📱 Mobile Share',
		'location' => 'mobile-share',
		'mode'     => 'none',
		'before'   => '',
		'after'    => '',
		'meta'     => array(
			'icons'  => true,
			'titles' => false,
			'labels' => false,
		),
		'fields'   => array(
			'display_total'   => false,
			'display_count'   => true,
			'title_locations' => array(),
			'count_locations' => array(),
			'label_locations' => array(),
			'schemes'         => array( 'default', 'simple-dark-back', 'bold-bg', 'bold' ),
			'layouts'         => array( 'horizontal', 'left-side', 'right-side', 'popup' ),
		),
		'layout'   => 'horizontal',
	);

	return $locations;
}
add_filter( 'powerkit_share_buttons_locations', 'csco_powerkit_change_share_buttons_locations', 9999 );

/**
 * Register Floated Share Buttons Location
 */
function csco_powerkit_widget_author_image_size() {
	return 'csco-thumbnail-uncropped';
}
add_filter( 'powerkit_widget_author_image_size', 'csco_powerkit_widget_author_image_size' );

/**
 * Change Contributors widget post author description length.
 */
function csco_powerkit_widget_contributors_description_length() {
	return 80;
}
add_filter( 'powerkit_widget_contributors_description_length', 'csco_powerkit_widget_contributors_description_length' );

/**
 * Change settings of opt-in-form
 *
 * @param array $blocks All registered blocks.
 */
function csco_change_settings_opt_in_form( $blocks ) {

	foreach ( $blocks as $key => $block ) {

		if ( 'canvas/opt-in-form' === $block['name'] ) {
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButtonBG',
				'label'   => esc_html__( 'Button Background', 'uppercase' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button',
						'suffix'   => '!important',
					),
				),
			), false, true );
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButton',
				'label'   => esc_html__( 'Button Color', 'uppercase' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button-contrast',
						'suffix'   => '!important',
					),
				),
			), false, true );
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButtonBGHover',
				'label'   => esc_html__( 'Button Background Hover', 'uppercase' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button-hover',
						'suffix'   => '!important',
					),
				),
			), false, true );
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButtonHover',
				'label'   => esc_html__( 'Button Color Hover', 'uppercase' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button-hover-contrast',
						'suffix'   => '!important',
					),
				),
			), false, true );
		}
	}

	return $blocks;
}
add_filter( 'canvas_register_block_type', 'csco_change_settings_opt_in_form', 999 );

/**
 * Add exclude selectors of TOC
 *
 * @param string $list List selectors.
 */
function csco_powerkit_toc_exclude_selectors( $list ) {
	$list .= '|.cs-entry__title';

	return $list;
}
add_filter( 'pk_toc_exclude', 'csco_powerkit_toc_exclude_selectors' );

/**
 * Exclude Inline Posts posts from related posts block
 *
 * @param array $args Array of WP_Query args.
 */
function csco_related_posts_args( $args ) {
	global $powerkit_inline_posts;
	if ( ! $powerkit_inline_posts ) {
		return $args;
	}
	$post__not_in         = $args['post__not_in'];
	$post__not_in         = array_unique( array_merge( $post__not_in, $powerkit_inline_posts ) );
	$args['post__not_in'] = $post__not_in;
	return $args;
}

/**
 * Remove page template Canvas Full Width
 *
 * @param array $page_templates List of currently active page templates.
 */
function csco_remove_page_template( $page_templates ) {
	unset( $page_templates['template-canvas-fullwidth.php'] );

	return $page_templates;
}
add_filter( 'theme_page_templates', 'csco_remove_page_template' );
