<?php
/**
 * Typography
 *
 * @package Uppercase
 */

CSCO_Kirki::add_panel(
	'typography',
	array(
		'title'    => esc_html__( 'Typography', 'uppercase' ),
		'priority' => 30,
	)
);

CSCO_Kirki::add_section(
	'typography_general',
	array(
		'title'    => esc_html__( 'General', 'uppercase' ),
		'panel'    => 'typography',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_base',
		'label'    => esc_html__( 'Base Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'Inter',
			'font-size'      => '1rem',
			'variant'        => 'regular',
			'letter-spacing' => 'normal',
			'line-height'    => '1.5',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'italic',
					'500',
					'600',
					'700',
				),
			)
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'typography',
		'settings'    => 'font_primary',
		'label'       => esc_html__( 'Primary Font', 'uppercase' ),
		'description' => esc_html__( 'Used for buttons, and tags and other actionable elements.', 'uppercase' ),
		'section'     => 'typography_general',
		'default'     => array(
			'font-family'    => 'Inter',
			'font-size'      => '0.625rem',
			'variant'        => '500',
			'letter-spacing' => '0.15em',
			'text-transform' => 'uppercase',
			'subsets'        => array( 'latin' ),
		),
		'choices'     => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'italic',
					'500',
					'600',
					'700',
				),
			)
		),
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'typography',
		'settings'    => 'font_secondary',
		'label'       => esc_html__( 'Secondary Font', 'uppercase' ),
		'description' => esc_html__( 'Used for image captions and other secondary elements.', 'uppercase' ),
		'section'     => 'typography_general',
		'default'     => array(
			'font-family'    => 'Inter',
			'font-size'      => '0.6875rem',
			'variant'        => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'     => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'italic',
					'500',
					'600',
					'700',
				),
			)
		),
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_category',
		'label'    => esc_html__( 'Category Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'Inter',
			'font-size'      => '0.625rem',
			'variant'        => '500',
			'letter-spacing' => '0.15em',
			'text-transform' => 'uppercase',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_post_meta',
		'label'    => esc_html__( 'Post Meta Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'Inter',
			'font-size'      => '0.8125rem',
			'variant'        => '400',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'600',
				),
			)
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_input',
		'label'    => esc_html__( 'Input Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'Inter',
			'font-size'      => '0.75rem',
			'variant'        => '400',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_post_subtitle',
		'label'    => esc_html__( 'Post Subtitle Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'inherit',
			'variant'        => '400',
			'font-size'      => '1.25rem',
			'letter-spacing' => 'normal',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'italic',
					'500italic',
					'600',
					'600italic',
				),
			)
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_post_content',
		'label'    => esc_html__( 'Post Content Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'Inter',
			'variant'        => '400',
			'font-size'      => '1rem',
			'letter-spacing' => 'normal',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'italic',
					'500italic',
					'600',
					'600italic',
				),
			)
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_summary',
		'label'    => esc_html__( 'Summary Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'Inter',
			'variant'        => '400',
			'font-size'      => '1rem',
			'letter-spacing' => 'normal',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'600',
				),
			)
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_excerpt',
		'label'    => esc_html__( 'Entry Excerpt Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-family'    => 'Inter',
			'variant'        => '400',
			'font-size'      => '0.9375rem',
			'letter-spacing' => 'normal',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'600',
				),
			)
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_excerpt_large',
		'label'    => esc_html__( 'Entry Excerpt Large Post Font', 'uppercase' ),
		'section'  => 'typography_general',
		'default'  => array(
			'font-size'      => '1rem',
			'letter-spacing' => 'normal',
		),
		'choices'  => apply_filters(
			'powerkit_fonts_choices',
			array(
				'variant' => array(
					'regular',
					'600',
				),
			)
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_section(
	'typography_logos',
	array(
		'title'    => esc_html__( 'Logos', 'uppercase' ),
		'panel'    => 'typography',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'typography',
		'settings'        => 'font_main_logo',
		'label'           => esc_html__( 'Main Logo', 'uppercase' ),
		'description'     => esc_html__( 'The main logo is used in the navigation bar and mobile view of your website.', 'uppercase' ),
		'section'         => 'typography_logos',
		'default'         => array(
			'font-family'    => 'Inter',
			'font-size'      => '1.5rem',
			'variant'        => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'uppercase',
			'subsets'        => array( 'latin' ),
		),
		'choices'         => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'logo',
				'operator' => '==',
				'value'    => '',
			),
		),
	)
);

CSCO_Kirki::add_section(
	'typography_headings',
	array(
		'title'    => esc_html__( 'Headings', 'uppercase' ),
		'panel'    => 'typography',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_headings',
		'label'    => esc_html__( 'Headings', 'uppercase' ),
		'section'  => 'typography_headings',
		'default'  => array(
			'font-family'    => 'Inter',
			'variant'        => '500',
			'line-height'    => '1.25',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'  => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_home_heading',
		'label'    => esc_html__( 'Homepage Post Headings', 'uppercase' ),
		'section'  => 'typography_headings',
		'default'  => array(
			'font-size' => '1.5rem',
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_home_large_heading',
		'label'    => esc_html__( 'Homepage Large Post Headings', 'uppercase' ),
		'section'  => 'typography_headings',
		'default'  => array(
			'font-size' => '2rem',
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_archive_heading',
		'label'    => esc_html__( 'Archive Post Headings', 'uppercase' ),
		'section'  => 'typography_headings',
		'default'  => array(
			'font-size' => '1.25rem',
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_archive_large_heading',
		'label'    => esc_html__( 'Archive Large Post Headings', 'uppercase' ),
		'section'  => 'typography_headings',
		'default'  => array(
			'font-size' => '2rem',
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'typography',
		'settings' => 'font_page_heading',
		'label'    => esc_html__( 'Page Header', 'uppercase' ),
		'section'  => 'typography_headings',
		'default'  => array(
			'font-size' => '2.5rem',
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'      => 'typography',
		'settings'  => 'section_heading_font',
		'label'     => esc_html__( 'Section Headings', 'uppercase' ),
		'section'   => 'typography_headings',
		'default'   => array(
			'font-family'    => 'Inter',
			'font-size'      => '1rem',
			'variant'        => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'   => apply_filters( 'powerkit_fonts_choices', array() ),
		'transport' => 'auto',
		'priority'  => 10,
	)
);

CSCO_Kirki::add_section(
	'typography_menu',
	array(
		'title'    => esc_html__( 'Menu', 'uppercase' ),
		'panel'    => 'typography',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'typography',
		'settings'    => 'font_menu',
		'label'       => esc_html__( 'Menu Font', 'uppercase' ),
		'description' => esc_html__( 'Used for main top level menu elements.', 'uppercase' ),
		'section'     => 'typography_menu',
		'default'     => array(
			'font-family'    => 'Inter',
			'font-size'      => '2.5rem',
			'variant'        => '400',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'     => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'typography',
		'settings'    => 'font_submenu',
		'label'       => esc_html__( 'Submenu Font', 'uppercase' ),
		'description' => esc_html__( 'Used for submenu elements.', 'uppercase' ),
		'section'     => 'typography_menu',
		'default'     => array(
			'font-family'    => 'Inter',
			'font-size'      => '1.5rem',
			'variant'        => '400',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'     => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'typography',
		'settings'    => 'font_submenu_small',
		'label'       => esc_html__( 'Muti-Column Submenu Font', 'uppercase' ),
		'description' => esc_html__( 'Used for multi-column submenu elements.', 'uppercase' ),
		'section'     => 'typography_menu',
		'default'     => array(
			'font-family'    => 'Inter',
			'font-size'      => '1rem',
			'variant'        => '400',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'     => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'typography',
		'settings'    => 'font_secondarymenu',
		'label'       => esc_html__( 'Secondary Menu Font', 'uppercase' ),
		'description' => esc_html__( 'Used for secondary menu elements and previous/next post pagination.', 'uppercase' ),
		'section'     => 'typography_menu',
		'default'     => array(
			'font-family'    => 'Inter',
			'font-size'      => '1.5rem',
			'variant'        => '400',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets'        => array( 'latin' ),
		),
		'choices'     => apply_filters( 'powerkit_fonts_choices', array() ),
		'priority'    => 10,
	)
);
