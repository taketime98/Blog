<?php
/**
 * Filters.
 *
 * @package Uppercase
 */

/**
 * PinIt exclude selectors from archive
 *
 * @param string $selectors List selectors.
 */
function csco_archive_pinit_exclude_selectors( $selectors ) {
	$selectors[] = '.cs-posts-area__main';
	$selectors[] = '.cs-entry';

	return $selectors;
}
add_filter( 'powerkit_pinit_exclude_selectors', 'csco_archive_pinit_exclude_selectors' );

/**
 * Set the correct slug for the default scheme
 *
 * @param string $slug The slug of scheme.
 */
function csco_canvas_scheme_default_slug( $slug ) {
	$slug = csco_detect_color_scheme( get_theme_mod( 'color_site_background', '#ffffff' ) );

	return $slug;
}
add_filter( 'canvas_scheme_default_slug', 'csco_canvas_scheme_default_slug' );

/**
 * Set the correct slug for the dark scheme
 *
 * @param string $slug The slug of scheme.
 */
function csco_canvas_scheme_dark_slug( $slug ) {
	$slug = csco_detect_color_scheme( get_theme_mod( 'color_site_background_dark', '#1c1c1c' ) );

	return $slug;
}
add_filter( 'canvas_scheme_dark_slug', 'csco_canvas_scheme_dark_slug' );

/**
 * Add new styles to "Section Headings"
 *
 * @param array $blocks All registered blocks.
 */
function csco_add_styles_section_headings( $blocks ) {

	$fields_remove = array(
		'colorHeadingBorder',
		'colorHeadingAccent',
		'colorHeading',
	);

	foreach ( $blocks as $key => $block ) {

		if ( 'canvas/section-heading' !== $block['name'] ) {
			continue;
		}

		// Add new heading.
		$blocks[ $key ]['styles'][] = array(
			'name'  => 'cnvs-block-section-heading-18',
			'label' => esc_html__( 'Decorative Font', 'uppercase' ),
		);

		// Remove basic fields.
		foreach ( $blocks[ $key ]['fields'] as $f => $field ) {
			if ( in_array( $field['key'], $fields_remove, true ) ) {
				unset( $blocks[ $key ]['fields'][ $f ] );
			}
		}

		// Reset keys.
		$blocks[ $key ]['fields'] = array_values( $blocks[ $key ]['fields'] );

		// Add color fields.
		$blocks[ $key ]['fields'][] = array(
			'key'     => 'colorHeadingBorder',
			'label'   => esc_html__( 'Border Color', 'uppercase' ),
			'section' => 'color',
			'type'    => 'color',
			'output'  => array(
				array(
					'element'  => '$.cnvs-block-section-heading',
					'property' => '--cnvs-section-heading-border-color',
					'suffix'   => '!important',
				),
			),
		);
		$blocks[ $key ]['fields'][] = array(
			'key'     => 'colorHeadingAccent',
			'label'   => esc_html__( 'Accent Color', 'uppercase' ),
			'section' => 'color',
			'type'    => 'color',
			'output'  => array(
				array(
					'element'  => '$.cnvs-block-section-heading',
					'property' => '--cnvs-section-heading-icon-color',
					'suffix'   => '!important',
				),
				array(
					'element'  => '$.cnvs-block-section-heading',
					'property' => '--cnvs-section-heading-accent-block-backround',
					'suffix'   => '!important',
				),
			),
		);
		$blocks[ $key ]['fields'][] = array(
			'key'     => 'colorHeadingAccentContrast',
			'label'   => esc_html__( 'Accent Contrast Color', 'uppercase' ),
			'section' => 'color',
			'type'    => 'color',
			'output'  => array(
				array(
					'element'  => '$.cnvs-block-section-heading',
					'property' => '--cnvs-section-heading-accent-block-color',
					'suffix'   => '!important',
				),
			),
		);
		$blocks[ $key ]['fields'][] = array(
			'key'     => 'colorHeading',
			'label'   => esc_html__( 'Text Color', 'uppercase' ),
			'section' => 'color',
			'type'    => 'color',
			'output'  => array(
				array(
					'element'  => '$.cnvs-block-section-heading',
					'property' => '--cnvs-section-heading-color',
					'suffix'   => '!important',
				),
			),
		);
	}

	return $blocks;
}
add_filter( 'canvas_register_block_type', 'csco_add_styles_section_headings', 999 );

/**
 * Change post query by posts attributes
 *
 * @param array $args Args for post query.
 * @param array $attributes Block attributes.
 * @param array $options Block options.
 */
function csco_canvas_posts_query_args( $args, $attributes, $options ) {

	// Posts count.
	if ( isset( $options['areaPostsCount'] ) && $options['areaPostsCount'] ) {
		$args['posts_per_page'] = $options['areaPostsCount'];
	}

	return $args;
}
add_filter( 'canvas_block_posts_query_args', 'csco_canvas_posts_query_args', 10, 3 );

/**
 * Remove Default Layouts
 *
 * @param array $layouts List of layouts.
 */
function csco_canvas_remove_layouts( $layouts ) {
	// Remove Unused layout type.
	unset( $layouts['masonry'] );
	unset( $layouts['sidebar-list'] );
	unset( $layouts['sidebar-numbered'] );
	unset( $layouts['sidebar-large'] );

	return $layouts;
}
add_filter( 'canvas_block_layouts_canvas/posts', 'csco_canvas_remove_layouts', 99 );
