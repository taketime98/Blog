<?php
/**
 * Header Settings
 *
 * @package Uppercase
 */

CSCO_Kirki::add_section(
	'header',
	array(
		'title'    => esc_html__( 'Header Settings', 'uppercase' ),
		'priority' => 40,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'collapsible',
		'settings'    => 'header_collapsible_menu',
		'section'     => 'header',
		'label'       => esc_html__( 'Menu', 'uppercase' ),
		'priority'    => 10,
		'input_attrs' => array(
			'collapsed' => true,
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'header_menu_button',
		'label'    => esc_html__( 'Display menu button', 'uppercase' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'header_secondary_menu',
		'label'           => esc_html__( 'Display secondary menu', 'uppercase' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_menu_button',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'header_collapsible_search',
		'section'  => 'header',
		'label'    => esc_html__( 'Search', 'uppercase' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'header_search_button',
		'label'    => esc_html__( 'Display search button', 'uppercase' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'header_search_posts',
		'label'           => esc_html__( 'Display search posts', 'uppercase' ),
		'description'     => esc_html__( 'Display posts in popup search form.', 'uppercase' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'text',
		'settings'        => 'header_search_posts_heading',
		'label'           => esc_html__( 'Heading of Posts', 'uppercase' ),
		'section'         => 'header',
		'default'         => esc_html__( 'Popular Now', 'uppercase' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'header_search_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'uppercase' ),
		'section'         => 'header',
		'default'         => 'square',
		'choices'         => array(
			'original'  => esc_html__( 'Original', 'uppercase' ),
			'landscape' => esc_html__( 'Landscape', 'uppercase' ),
			'square'    => esc_html__( 'Square', 'uppercase' ),
			'portrait'  => esc_html__( 'Portrait', 'uppercase' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'header_search_image_size',
		'label'           => esc_html__( 'Image Size', 'uppercase' ),
		'section'         => 'header',
		'default'         => 'csco-small',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'number',
		'settings'        => 'header_search_posts_perpage',
		'label'           => esc_html__( 'Number of Posts', 'uppercase' ),
		'section'         => 'header',
		'default'         => 3,
		'priority'        => 10,
		'choices'         => array(
			'min'  => 0,
			'max'  => 12,
			'step' => 1,
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'multicheck',
		'settings'        => 'header_search_posts_meta',
		'label'           => esc_html__( 'Post Meta', 'uppercase' ),
		'section'         => 'header',
		'default'         => array( 'category' ),
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
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'header_search_posts_order',
		'label'           => esc_html__( 'Order posts', 'uppercase' ),
		'section'         => 'header',
		'default'         => 'DESC',
		'priority'        => 10,
		'choices'         => array(
			'ASC'  => esc_html__( 'ASC', 'uppercase' ),
			'DESC' => esc_html__( 'DESC', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'header_search_tags',
		'label'           => esc_html__( 'Display search tags', 'uppercase' ),
		'description'     => esc_html__( 'Display tags in popup search form.', 'uppercase' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'number',
		'settings'        => 'header_search_tags_number',
		'label'           => esc_html__( 'Maximum Number of Tags', 'uppercase' ),
		'section'         => 'header',
		'default'         => 10,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_tags',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'header_search_tags_orderby',
		'label'           => esc_html__( 'Order tags by', 'uppercase' ),
		'section'         => 'header',
		'default'         => 'date',
		'priority'        => 10,
		'choices'         => array(
			'date'  => esc_html__( 'Date', 'uppercase' ),
			'count' => esc_html__( 'Count of Posts', 'uppercase' ),
			'name'  => esc_html__( 'Name', 'uppercase' ),
			'id'    => esc_html__( 'ID', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_tags',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'header_search_tags_order',
		'label'           => esc_html__( 'Order tags', 'uppercase' ),
		'section'         => 'header',
		'default'         => 'DESC',
		'priority'        => 10,
		'choices'         => array(
			'ASC'  => esc_html__( 'ASC', 'uppercase' ),
			'DESC' => esc_html__( 'DESC', 'uppercase' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_tags',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

if ( csco_powerkit_module_enabled( 'social_links' ) ) {

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'collapsible',
			'settings' => 'header_collapsible_social_links',
			'section'  => 'header',
			'label'    => esc_html__( 'Social Links', 'uppercase' ),
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'checkbox',
			'settings' => 'header_social_links',
			'label'    => esc_html__( 'Display social links', 'uppercase' ),
			'section'  => 'header',
			'default'  => true,
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'select',
			'settings'        => 'header_social_links_scheme',
			'label'           => esc_html__( 'Color scheme', 'uppercase' ),
			'section'         => 'header',
			'default'         => 'light',
			'priority'        => 10,
			'choices'         => array(
				'light' => esc_html__( 'Light', 'uppercase' ),
				'bold'  => esc_html__( 'Bold', 'uppercase' ),
			),
			'active_callback' => array(
				array(
					'setting'  => 'header_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'number',
			'settings'        => 'header_social_links_maximum',
			'label'           => esc_html__( 'Maximum Number of Social Links', 'uppercase' ),
			'section'         => 'header',
			'default'         => 3,
			'priority'        => 10,
			'active_callback' => array(
				array(
					'setting'  => 'header_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'checkbox',
			'settings'        => 'header_social_links_counts',
			'label'           => esc_html__( 'Display social counts', 'uppercase' ),
			'section'         => 'header',
			'default'         => true,
			'priority'        => 10,
			'active_callback' => array(
				array(
					'setting'  => 'header_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);
}
