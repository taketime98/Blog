<?php
/**
 * Archive Settings
 *
 * @package Uppercase
 */

CSCO_Kirki::add_section(
	'archive_settings',
	array(
		'title'    => esc_html__( 'Archive Settings', 'uppercase' ),
		'priority' => 50,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'archive_layout',
		'label'    => esc_html__( 'Layout', 'uppercase' ),
		'section'  => 'archive_settings',
		'default'  => 'grid',
		'priority' => 10,
		'choices'  => array(
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
		'type'            => 'select',
		'settings'        => 'archive_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => 'original',
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
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_tile_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'uppercase' ),
		'section'         => 'archive_settings',
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
				'setting'  => 'archive_layout',
				'operator' => 'in',
				'value'    => array( 'tile', 'tile-two', 'tile-mixed', 'mosaic-two' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'archive_tile_large_image_orientation',
		'label'           => esc_html__( 'Large Post Image Orientation', 'uppercase' ),
		'section'         => 'archive_settings',
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
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_image_size',
		'label'           => esc_html__( 'Image Size', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => 'csco-thumbnail',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_image_size_full',
		'label'           => esc_html__( 'Large Post Image Size', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => 'csco-thumbnail',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_image_width',
		'label'           => esc_html__( 'Image Width', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => 'half',
		'choices'         => array(
			'one-third' => esc_html__( 'One Third', 'uppercase' ),
			'half'      => esc_html__( 'Half', 'uppercase' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_media_preview',
		'label'           => esc_html__( 'Post Preview Image Size', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => 'cropped',
		'priority'        => 10,
		'choices'         => array(
			'cropped'   => esc_html__( 'Display Cropped Image', 'uppercase' ),
			'uncropped' => esc_html__( 'Display Preview in Original Ratio', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
				'operator' => 'in',
				'value'    => array( 'full', 'full-fullwidth' ),
			),
			array(
				'setting'  => 'archive_image_orientation',
				'operator' => '==',
				'value'    => 'original',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'multicheck',
		'settings' => 'archive_post_meta',
		'label'    => esc_html__( 'Post Meta', 'uppercase' ),
		'section'  => 'archive_settings',
		'default'  => array( 'category', 'author', 'date' ),
		'priority' => 10,
		'choices'  => apply_filters(
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
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'multicheck',
		'settings'        => 'archive_large_post_meta',
		'label'           => esc_html__( 'Large Post Post Meta', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => array( 'category', 'author', 'date' ),
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
				'setting'  => 'archive_layout',
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
		'settings' => 'archive_video_backgrounds',
		'label'    => esc_html__( 'Enable video backgrounds', 'uppercase' ),
		'section'  => 'archive_settings',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'archive_excerpt',
		'label'    => esc_html__( 'Display excerpt', 'uppercase' ),
		'section'  => 'archive_settings',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'archive_large_excerpt',
		'label'           => esc_html__( 'Display large post excerpt', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_summary',
		'label'           => esc_html__( 'Full Post Summary', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => 'summary',
		'priority'        => 10,
		'choices'         => array(
			'summary' => esc_html__( 'Use Excerpts', 'uppercase' ),
			'content' => esc_html__( 'Use Read More Tag', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				array(
					'setting'  => 'archive_layout',
					'operator' => 'in',
					'value'    => array( 'full', 'full-fullwidth' ),
				),
			),
			array(
				array(
					'setting'  => 'archive_excerpt',
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
		'settings'        => 'archive_more_button',
		'label'           => esc_html__( 'Display read more button', 'uppercase' ),
		'section'         => 'archive_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'archive_layout',
					'operator' => 'in',
					'value'    => array( 'full', 'full-fullwidth' ),
				),
			),
			array(
				array(
					'setting'  => 'archive_summary',
					'operator' => '==',
					'value'    => 'summary',
				),
			),
			array(
				array(
					'setting'  => 'archive_excerpt',
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
		'type'     => 'radio',
		'settings' => 'archive_pagination_type',
		'label'    => esc_html__( 'Pagination', 'uppercase' ),
		'section'  => 'archive_settings',
		'default'  => 'load-more',
		'priority' => 10,
		'choices'  => array(
			'standard'  => esc_html__( 'Standard', 'uppercase' ),
			'load-more' => esc_html__( 'Load More Button', 'uppercase' ),
			'infinite'  => esc_html__( 'Infinite Load', 'uppercase' ),
		),
	)
);
