<?php
/**
 * Register Grid.
 *
 * @package Uppercase
 */

/**
 * Register New Layout
 *
 * @param array $layouts List of layouts.
 */
function csco_canvas_register_layout_grid( $layouts = array() ) {

	$layout = 'grid';

	// Add new layout.
	$layouts[ $layout ] = array(
		'location'    => array(),
		'name'        => esc_html__( 'Grid', 'uppercase' ),
		'template'    => get_template_directory() . '/template-parts/blocks/posts-area.php',
		'icon'        => '<svg width="52" height="44" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" stroke="#2d2d2d" fill="none" fill-rule="evenodd"><rect stroke-width="1.5" width="50" height="42" rx="3"></rect><g transform="translate(27 5)"><rect stroke-width="1.5" width="18" height="9" rx="1"></rect><path d="M.5 11.5h17M.5 14h13" stroke-linecap="round" stroke-linejoin="round"></path></g><g transform="translate(27 23)"><rect stroke-width="1.5" width="18" height="9" rx="1"></rect><path d="M.5 11.5h17M.5 14h13" stroke-linecap="round" stroke-linejoin="round"></path></g><g transform="translate(5 5)"><rect stroke-width="1.5" width="18" height="9" rx="1"></rect><path d="M.5 11.5h17M.5 14h13" stroke-linecap="round" stroke-linejoin="round"></path></g><g transform="translate(5 23)"><rect stroke-width="1.5" width="18" height="9" rx="1"></rect><path d="M.5 11.5h17M.5 14h13" stroke-linecap="round" stroke-linejoin="round"></path></g></g></svg>',
		'sections'    => array(
			'general'    => array(
				'title'    => esc_html__( 'Block Settings', 'uppercase' ),
				'priority' => 5,
				'open'     => true,
			),
			'post-meta'  => array(
				'title'    => esc_html__( 'Meta Settings', 'uppercase' ),
				'priority' => 10,
			),
			'typography' => array(
				'title'    => esc_html__( 'Typography Settings', 'uppercase' ),
				'priority' => 10,
			),
		),
		'hide_fields' => csco_get_gutenberg_posts_hide_fields(),
		'fields'      => array_merge(
			csco_get_gutenberg_pagination_fields(),

			array(
				array(
					'key'            => 'columns',
					'label'          => esc_html__( 'Number of Columns', 'uppercase' ),
					'section'        => 'general',
					'type'           => 'number',
					'min'            => 1,
					'max'            => 2,
					'default'        => 1,
					'default_tablet' => 1,
					'default_mobile' => 1,
					'responsive'     => true,
					'output'         => array(
						array(
							'element'  => '$ .cs-posts-area__main',
							'property' => '--cs-posts-area-grid-columns',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'            => 'gap_posts',
					'label'          => esc_html__( 'Gap between Posts', 'uppercase' ),
					'type'           => 'dimension',
					'section'        => 'general',
					'responsive'     => true,
					'default'        => '40px',
					'default_tablet' => '40px',
					'default_mobile' => '40px',
					'output'         => array(
						array(
							'element'  => '$ .cs-posts-area__main',
							'property' => '--cs-posts-area-grid-gap',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'post_format',
					'label'   => esc_html__( 'Enable post format', 'uppercase' ),
					'section' => 'general',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'key'     => 'video',
					'label'   => esc_html__( 'Enable video backgrounds', 'uppercase' ),
					'section' => 'general',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'key'             => 'video_controls',
					'label'           => esc_html__( 'Enable video controls', 'uppercase' ),
					'section'         => 'general',
					'type'            => 'toggle',
					'default'         => false,
					'active_callback' => array(
						array(
							'field'    => '$#video',
							'operator' => '==',
							'value'    => true,
						),
					),
				),
				// Thumbnail.
				array(
					'key'     => 'imageOrientation',
					'label'   => esc_html__( 'Image Orientation', 'uppercase' ),
					'section' => 'thumbnail',
					'type'    => 'select',
					'default' => 'landscape',
					'choices' => array(
						'original'       => esc_html__( 'Original', 'uppercase' ),
						'landscape'      => esc_html__( 'Landscape 4:3', 'uppercase' ),
						'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'uppercase' ),
						'landscape-16-9' => esc_html__( 'Landscape 16:9', 'uppercase' ),
						'portrait'       => esc_html__( 'Portrait 3:4', 'uppercase' ),
						'portrait-2-3'   => esc_html__( 'Portrait 2:3', 'uppercase' ),
						'square'         => esc_html__( 'Square', 'uppercase' ),
					),
				),
				array(
					'key'     => 'imageSize',
					'label'   => esc_html__( 'Images Size', 'uppercase' ),
					'section' => 'thumbnail',
					'type'    => 'select',
					'default' => 'medium_large',
					'choices' => csco_get_list_available_image_sizes(),
				),
				array(
					'key'     => 'imageBorderRadius',
					'label'   => esc_html__( 'Image Border Radius', 'uppercase' ),
					'section' => 'thumbnail',
					'type'    => 'dimension',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-image-border-radius',
						),
					),
				),
				// Typography.
				array(
					'key'        => 'typographyHeading',
					'label'      => esc_html__( 'Heading Font Size', 'uppercase' ),
					'section'    => 'typography',
					'type'       => 'dimension',
					'default'    => '1.25rem',
					'responsive' => true,
					'output'     => array(
						array(
							'element'  => '$ .cs-entry__title a',
							'property' => 'font-size',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'typographyHeadingTag',
					'label'   => esc_html__( 'Heading Tag', 'uppercase' ),
					'section' => 'typography',
					'type'    => 'select',
					'default' => 'h2',
					'choices' => array(
						'h1'  => esc_html__( 'H1', 'uppercase' ),
						'h2'  => esc_html__( 'H2', 'uppercase' ),
						'h3'  => esc_html__( 'H3', 'uppercase' ),
						'h4'  => esc_html__( 'H4', 'uppercase' ),
						'h5'  => esc_html__( 'H5', 'uppercase' ),
						'h6'  => esc_html__( 'H6', 'uppercase' ),
						'p'   => esc_html__( 'P', 'uppercase' ),
						'div' => esc_html__( 'DIV', 'uppercase' ),
					),
				),
				array(
					'key'             => 'typographyExcerpt',
					'label'           => esc_html__( 'Excerpt Font Size', 'uppercase' ),
					'section'         => 'typography',
					'type'            => 'dimension',
					'default'         => '0.9375rem',
					'responsive'      => true,
					'output'          => array(
						array(
							'element'  => '$ .cs-entry__excerpt',
							'property' => 'font-size',
							'suffix'   => '!important',
						),
					),
					'active_callback' => array(
						array(
							'field'    => '$#showExcerpt',
							'operator' => '===',
							'value'    => true,
						),
					),
				),
				// Color Settings.
				array(
					'key'     => 'colorBasicHeading',
					'label'   => esc_html__( 'Heading', 'uppercase' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title a',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicHeadingHover',
					'label'   => esc_html__( 'Heading Hover', 'uppercase' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title a:hover, $ .cs-entry__title a:focus',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'             => 'colorBasicExcerpt',
					'label'           => esc_html__( 'Excerpt', 'uppercase' ),
					'section'         => 'color',
					'type'            => 'color',
					'output'          => array(
						array(
							'element'  => '$ .cs-entry__excerpt',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
					'active_callback' => array(
						array(
							'field'    => '$#showExcerpt',
							'operator' => '===',
							'value'    => true,
						),
					),
				),
				array(
					'key'     => 'colorBasicMeta',
					'label'   => esc_html__( 'Post Meta', 'uppercase' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicMetaLinks',
					'label'   => esc_html__( 'Post Meta Links', 'uppercase' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta a',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicMetaLinksHover',
					'label'   => esc_html__( 'Post Meta Links Hover', 'uppercase' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta a:hover, $ .cs-entry__content .cs-entry__post-meta a:focus',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategory',
					'label'   => esc_html__( 'Category Color', 'uppercase' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta .cs-meta-category a',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategoryHover',
					'label'   => esc_html__( 'Category Hover Color', 'uppercase' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta .cs-meta-category a:hover',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
			),
			// Primary Meta.
			csco_get_gutenberg_meta_fields(
				array(
					'section_name' => 'post-meta',
				)
			),
			csco_get_gutenberg_excerpt_fields(
				array(
					'section_name' => 'post-meta',
					'default'      => true,
				)
			)
		),
	);

	return $layouts;
}
add_filter( 'canvas_block_layouts_canvas/posts', 'csco_canvas_register_layout_grid' );
