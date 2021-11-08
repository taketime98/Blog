<?php
/**
 * Homepage Settings
 *
 * @package Uppercase
 */

/**
 * Removes default WordPress Static Front Page section
 * and re-adds it in our own panel with the same parameters.
 *
 * @param object $wp_customize Instance of the WP_Customize_Manager class.
 */
function csco_reorder_customizer_settings( $wp_customize ) {

	// Get current front page section parameters.
	$static_front_page = $wp_customize->get_section( 'static_front_page' );

	// Remove existing section, so that we can later re-add it to our panel.
	$wp_customize->remove_section( 'static_front_page' );

	// Re-add static front page section with a new name, but same description.
	$wp_customize->add_section(
		'static_front_page',
		array(
			'title'           => esc_html__( 'Static Front Page', 'uppercase' ),
			'priority'        => 20,
			'description'     => $static_front_page->description,
			'panel'           => 'home_panel',
			'active_callback' => $static_front_page->active_callback,
		)
	);
}
add_action( 'customize_register', 'csco_reorder_customizer_settings' );

CSCO_Kirki::add_panel(
	'home_panel',
	array(
		'title'    => esc_html__( 'Homepage Settings', 'uppercase' ),
		'priority' => 50,
	)
);

CSCO_Kirki::add_section(
	'home_settings',
	array(
		'title'    => esc_html__( 'Homepage Layout', 'uppercase' ),
		'priority' => 15,
		'panel'    => 'home_panel',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'home_layout',
		'label'    => esc_html__( 'Layout', 'uppercase' ),
		'section'  => 'home_settings',
		'default'  => 'grid',
		'priority' => 10,
		'choices'  => array(
			'large'          => esc_html__( 'Large Post Layout', 'uppercase' ),
			'full'           => esc_html__( 'Full Post Layout', 'uppercase' ),
			'full-fullwidth' => esc_html__( 'Full Width Post Layout', 'uppercase' ),
			'list'           => esc_html__( 'List Layout', 'uppercase' ),
			'mosaic-two'     => esc_html__( 'List Full Width Layout', 'uppercase' ),
			'grid'           => esc_html__( 'Grid Layout', 'uppercase' ),
			'grid-fullwidth' => esc_html__( 'Grid Full Width Layout', 'uppercase' ),
			'tile'           => esc_html__( 'Tile Layout', 'uppercase' ),
			'tile-two'       => esc_html__( 'Two-Column Tile Layout', 'uppercase' ),
			'tile-mixed'     => esc_html__( 'Mixed Tile Layout', 'uppercase' ),
			'mosaic'         => esc_html__( 'Mosaic Layout', 'uppercase' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'custom',
		'settings'        => 'home_layout_large_notion',
		'label'           => esc_html__( '§ Notion', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => esc_html__( 'This Layout use some of the settings from "Post Settings".', 'uppercase' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'landscape',
		'choices'         => array(
			'original'       => esc_html__( 'Original', 'uppercase' ),
			'landscape-16-9' => esc_html__( 'Landscape 16:9', 'uppercase' ),
			'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'uppercase' ),
			'landscape'      => esc_html__( 'Landscape 4:3', 'uppercase' ),
			'square'         => esc_html__( 'Square', 'uppercase' ),
			'portrait'       => esc_html__( 'Portrait', 'uppercase' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => 'in',
				'value'    => array( 'full', 'full-fullwidth', 'list', 'grid', 'grid-fullwidth' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_tile_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'landscape-16-9',
		'choices'         => array(
			'landscape-16-9' => esc_html__( 'Landscape 16:9', 'uppercase' ),
			'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'uppercase' ),
			'landscape'      => esc_html__( 'Landscape 4:3', 'uppercase' ),
			'square'         => esc_html__( 'Square', 'uppercase' ),
			'portrait'       => esc_html__( 'Portrait', 'uppercase' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => 'in',
				'value'    => array( 'tile', 'tile-two', 'tile-mixed', 'mosaic', 'mosaic-two' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_tile_large_image_orientation',
		'label'           => esc_html__( 'Large Post Image Orientation', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'landscape-16-9',
		'choices'         => array(
			'landscape-16-9' => esc_html__( 'Landscape 16:9', 'uppercase' ),
			'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'uppercase' ),
			'landscape'      => esc_html__( 'Landscape 4:3', 'uppercase' ),
			'square'         => esc_html__( 'Square', 'uppercase' ),
			'portrait'       => esc_html__( 'Portrait', 'uppercase' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'tile-mixed',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_image_size',
		'label'           => esc_html__( 'Image Size', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'csco-thumbnail',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => 'in',
				'value'    => array( 'list', 'grid', 'grid-fullwidth', 'tile', 'tile-two', 'tile-mixed', 'mosaic', 'mosaic-two' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_image_size_full',
		'label'           => esc_html__( 'Large Post Image Size', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'csco-large',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'tile-mixed',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_image_width',
		'label'           => esc_html__( 'Image Width', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'half',
		'choices'         => array(
			'one-third' => esc_html__( 'One Third', 'uppercase' ),
			'half'      => esc_html__( 'Half', 'uppercase' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'list',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'home_media_preview',
		'label'           => esc_html__( 'Post Preview Image Size', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'cropped',
		'priority'        => 10,
		'choices'         => array(
			'cropped'   => esc_html__( 'Display Cropped Image', 'uppercase' ),
			'uncropped' => esc_html__( 'Display Preview in Original Ratio', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => 'in',
				'value'    => array( 'full', 'full-fullwidth' ),
			),
			array(
				'setting'  => 'home_image_orientation',
				'operator' => '==',
				'value'    => 'original',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'multicheck',
		'settings'        => 'home_post_meta',
		'label'           => esc_html__( 'Post Meta', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => array( 'category', 'shares', 'reading_time' ),
		'priority'        => 10,
		'choices'         => apply_filters(
			'csco_post_meta_choices',
			array(
				'category'     => esc_html__( 'Category', 'uppercase' ),
				'author'       => esc_html__( 'Author', 'uppercase' ),
				'date'         => esc_html__( 'Date', 'uppercase' ),
				'views'        => esc_html__( 'Views', 'uppercase' ),
				'shares'       => esc_html__( 'Shares', 'uppercase' ),
				'comments'     => esc_html__( 'Comments', 'uppercase' ),
				'reading_time' => esc_html__( 'Reading Time', 'uppercase' ),
			)
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'multicheck',
		'settings'        => 'home_large_post_meta',
		'label'           => esc_html__( 'Large Post Post Meta', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => array( 'category', 'shares', 'reading_time' ),
		'priority'        => 10,
		'choices'         => apply_filters(
			'csco_post_meta_choices',
			array(
				'category'     => esc_html__( 'Category', 'uppercase' ),
				'author'       => esc_html__( 'Author', 'uppercase' ),
				'date'         => esc_html__( 'Date', 'uppercase' ),
				'views'        => esc_html__( 'Views', 'uppercase' ),
				'shares'       => esc_html__( 'Shares', 'uppercase' ),
				'comments'     => esc_html__( 'Comments', 'uppercase' ),
				'reading_time' => esc_html__( 'Reading Time', 'uppercase' ),
			)
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'tile-mixed',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'home_video_backgrounds',
		'label'    => esc_html__( 'Enable video backgrounds', 'uppercase' ),
		'section'  => 'home_settings',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'home_excerpt',
		'label'           => esc_html__( 'Display excerpt', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'home_large_excerpt',
		'label'           => esc_html__( 'Display large post excerpt', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'tile-mixed',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'home_summary',
		'label'           => esc_html__( 'Full Post Summary', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'summary',
		'priority'        => 10,
		'choices'         => array(
			'summary' => esc_html__( 'Use Excerpts', 'uppercase' ),
			'content' => esc_html__( 'Use Read More Tag', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				array(
					'setting'  => 'home_layout',
					'operator' => 'in',
					'value'    => array( 'full', 'full-fullwidth' ),
				),
			),
			array(
				array(
					'setting'  => 'home_excerpt',
					'operator' => '==',
					'value'    => true,
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'home_more_button',
		'label'           => esc_html__( 'Display read more button', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'home_layout',
					'operator' => 'in',
					'value'    => array( 'full', 'full-fullwidth' ),
				),
			),
			array(
				array(
					'setting'  => 'home_summary',
					'operator' => '==',
					'value'    => 'summary',
				),
			),
			array(
				array(
					'setting'  => 'home_excerpt',
					'operator' => '==',
					'value'    => true,
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'home_pagination_type',
		'label'           => esc_html__( 'Pagination', 'uppercase' ),
		'section'         => 'home_settings',
		'default'         => 'load-more',
		'priority'        => 10,
		'choices'         => array(
			'standard'  => esc_html__( 'Standard', 'uppercase' ),
			'load-more' => esc_html__( 'Load More Button', 'uppercase' ),
			'infinite'  => esc_html__( 'Infinite Load', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_section(
	'home_hero',
	array(
		'title'    => esc_html__( 'Hero Section', 'uppercase' ),
		'priority' => 15,
		'panel'    => 'home_panel',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'textarea',
		'settings'          => 'hero_title',
		'label'             => esc_html__( 'Title', 'uppercase' ),
		'section'           => 'home_hero',
		'default'           => get_bloginfo( 'description' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'image',
		'settings'        => 'hero_background_image',
		'label'           => esc_html__( 'Background Image', 'uppercase' ),
		'section'         => 'home_hero',
		'priority'        => 10,
		'choices'         => array(
			'save_as' => 'id',
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'hero_image_size',
		'label'           => esc_html__( 'Image Size', 'uppercase' ),
		'section'         => 'home_hero',
		'default'         => 'csco-hero',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'text',
		'settings'        => 'hero_video',
		'label'           => esc_html__( 'Video', 'uppercase' ),
		'description'     => esc_html__( 'YouTube Video Url', 'uppercase' ),
		'section'         => 'home_hero',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'text',
		'settings'        => 'hero_video_start',
		'label'           => esc_html__( 'Video Start Time (sec.)', 'uppercase' ),
		'section'         => 'home_hero',
		'priority'        => 10,
		'transport'       => 'postMessage',
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
			array(
				'setting'  => 'hero_video',
				'operator' => '!=',
				'value'    => '',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'text',
		'settings'        => 'hero_video_end',
		'label'           => esc_html__( 'Video End Time (sec.)', 'uppercase' ),
		'section'         => 'home_hero',
		'priority'        => 10,
		'transport'       => 'postMessage',
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
			array(
				'setting'  => 'hero_video',
				'operator' => '!=',
				'value'    => '',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'hero_video_controls',
		'label'           => esc_html__( 'Display video controls', 'uppercase' ),
		'section'         => 'home_hero',
		'default'         => true,
		'priority'        => 10,
		'transport'       => 'postMessage',
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
			array(
				'setting'  => 'hero_video',
				'operator' => '!=',
				'value'    => '',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'hero_additional_menu',
		'label'           => esc_html__( 'Display additional menu', 'uppercase' ),
		'section'         => 'home_hero',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
	)
);
