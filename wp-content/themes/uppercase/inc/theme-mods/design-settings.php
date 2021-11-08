<?php
/**
 * Design Settings
 *
 * @package Uppercase
 */

/**
 * Ovarlay color active callback
 */
function csco_kirki_overlay_callback() {
	$gradients = array(
		'gradient',
		'gradient-top',
		'gradient-bottom',
	);
	foreach ( $gradients as $gradient ) {
		$hero_overlay_type = get_theme_mod( 'hero_overlay_type', 'gradient' );
		$tile_overlay_type = get_theme_mod( 'tile_overlay_type', 'gradient' );
		if ( $gradient === $hero_overlay_type || $gradient === $tile_overlay_type ) {
			return true;
		}
	}

	return false;
}

CSCO_Kirki::add_section(
	'design',
	array(
		'title'    => esc_html__( 'Design', 'uppercase' ),
		'priority' => 20,
	)
);

/**
 * -------------------------------------------------------------------------
 * Colors
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'collapsible',
		'settings'    => 'design_collapsible_dark_mode',
		'section'     => 'design',
		'label'       => esc_html__( 'Dark Mode', 'uppercase' ),
		'priority'    => 10,
		'input_attrs' => array(
			'collapsed' => true,
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'color_scheme',
		'label'    => esc_html__( 'Site Color Scheme', 'uppercase' ),
		'section'  => 'design',
		'default'  => 'system',
		'choices'  => array(
			'system' => esc_html__( 'User’s system preference', 'uppercase' ),
			'light'  => esc_html__( 'Light', 'uppercase' ),
			'dark'   => esc_html__( 'Dark', 'uppercase' ),
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'color_scheme_toggle',
		'label'    => esc_html__( 'Enable dark/light mode toggle', 'uppercase' ),
		'section'  => 'design',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'collapsible',
		'settings'    => 'design_collapsible_light',
		'section'     => 'design',
		'label'       => esc_html__( 'Light Scheme', 'uppercase' ),
		'priority'    => 10,
		'input_attrs' => array(
			'collapsed' => false,
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_site_background',
		'label'    => esc_html__( 'Site Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [site-data-scheme="default"]',
				'property' => '--cs-color-site-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_component_background',
		'label'    => esc_html__( 'Menu and Search Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => 'rgba(255,255,255,0.8)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [site-data-scheme="default"], [data-scheme=default]',
				'property' => '--cs-color-component-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'custom',
		'settings' => 'color_' . wp_unique_id( 'divider_' ),
		'section'  => 'design',
		'default'  => '<div class="cs-customizer-divider"></div>',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_secondary',
		'label'    => esc_html__( 'Secondary Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#818181',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-secondary',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'custom',
		'settings' => 'color_' . wp_unique_id( 'divider_' ),
		'section'  => 'design',
		'default'  => '<div class="cs-customizer-divider"></div>',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button',
		'label'    => esc_html__( 'Button Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#141414',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_contrast',
		'label'    => esc_html__( 'Button Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_hover',
		'label'    => esc_html__( 'Button Hover Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#333335',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_hover_contrast',
		'label'    => esc_html__( 'Button Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'custom',
		'settings' => 'color_' . wp_unique_id( 'divider_' ),
		'section'  => 'design',
		'default'  => '<div class="cs-customizer-divider"></div>',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_post_title',
		'label'    => esc_html__( 'Post Title Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'output'   => array(
			array(
				'element'  => '[data-scheme="default"] .cs-posts-area .cs-entry__outer:not([data-scheme="inverse"]) .cs-entry__title a',
				'property' => '--cs-color-base',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_post_title_hover',
		'label'    => esc_html__( 'Post Title Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#818181',
		'output'   => array(
			array(
				'element'  => '[data-scheme="default"] .cs-posts-area .cs-entry__outer:not([data-scheme="inverse"]) .cs-entry__title a:hover',
				'property' => '--cs-color-secondary',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_category',
		'label'    => esc_html__( 'Category Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="default"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="default"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-category',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_category_hover',
		'label'    => esc_html__( 'Category Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#818181',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="default"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="default"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-category-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_meta',
		'label'    => esc_html__( 'Post Meta Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#737378',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="default"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="default"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-post-meta',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_meta_link',
		'label'    => esc_html__( 'Post Meta Link Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="default"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="default"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-post-meta-link',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_meata_link_hover',
		'label'    => esc_html__( 'Post Meta Link Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#818181',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="default"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="default"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-post-meta-link-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'design_collapsible_dark',
		'section'  => 'design',
		'label'    => esc_html__( 'Dark Scheme', 'uppercase' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_site_background_dark',
		'label'    => esc_html__( 'Site Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#1c1c1c',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '[site-data-scheme="dark"]',
				'property' => '--cs-color-site-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_component_background_dark',
		'label'    => esc_html__( 'Menu and Search Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => 'rgba(0,0,0,0.5)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '[site-data-scheme="dark"], [data-scheme="dark"], [data-scheme="inverse"]',
				'property' => '--cs-color-component-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'custom',
		'settings' => 'color_' . wp_unique_id( 'divider_' ),
		'section'  => 'design',
		'default'  => '<div class="cs-customizer-divider"></div>',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_dark',
		'label'    => esc_html__( 'Button Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#141414',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_contrast_dark',
		'label'    => esc_html__( 'Button Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_hover_dark',
		'label'    => esc_html__( 'Button Hover Background', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#333335',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_hover_contrast_dark',
		'label'    => esc_html__( 'Button Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'custom',
		'settings' => 'color_' . wp_unique_id( 'divider_' ),
		'section'  => 'design',
		'default'  => '<div class="cs-customizer-divider"></div>',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_post_title_dark',
		'label'    => esc_html__( 'Post Title Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'output'   => array(
			array(
				'element'  => '[data-scheme="dark"] .cs-posts-area .cs-entry__outer:not([data-scheme="inverse"]) .cs-entry__title a',
				'property' => '--cs-color-base',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_post_title_hover_dark',
		'label'    => esc_html__( 'Post Title Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#a4a4a5',
		'output'   => array(
			array(
				'element'  => '[data-scheme="dark"] .cs-posts-area .cs-entry__outer:not([data-scheme="inverse"]) .cs-entry__title a:hover',
				'property' => '--cs-color-secondary',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_category_dark',
		'label'    => esc_html__( 'Category Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="dark"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="dark"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-category',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_category_hover_dark',
		'label'    => esc_html__( 'Category Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#a4a4a5',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="dark"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="dark"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-category-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_meta_dark',
		'label'    => esc_html__( 'Post Meta Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#d2d2d2',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="dark"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="dark"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-post-meta',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_meta_link_dark',
		'label'    => esc_html__( 'Post Meta Link Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="dark"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="dark"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-post-meta-link',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_meata_link_hover_dark',
		'label'    => esc_html__( 'Post Meta Link Hover Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#a4a4a5',
		'output'   => array(
			array(
				'element'  => '
					[data-scheme="dark"] .cs-page-header-area:not([data-scheme="inverse"]),
					[data-scheme="dark"] .cs-content-area .cs-entry__outer:not([data-scheme="inverse"])
				',
				'property' => '--cs-color-post-meta-link-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'design_collapsible_overlay',
		'section'  => 'design',
		'label'    => esc_html__( 'Overlay', 'uppercase' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_overlay',
		'label'    => esc_html__( 'Overlay Color', 'uppercase' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => 'rgba(0,0,0,0.25)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '.cs-page-header-background.cs-overlay-solid, .cs-overlay-background.cs-overlay-solid',
				'property' => '--cs-color-overlay-background-gradient',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'gradient_overlay',
		'label'           => esc_html__( 'Gradient Color', 'uppercase' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => 'rgba(0,0,0,0.5)',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '.cs-page-header-background.cs-overlay-gradient-top, .cs-page-header-background.cs-overlay-gradient-bottom, .cs-overlay-background.cs-overlay-gradient-top, .cs-overlay-background.cs-overlay-gradient-bottom',
				'property' => '--cs-color-overlay-background-gradient',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => 'csco_kirki_overlay_callback',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'hero_overlay_type',
		'label'    => esc_html__( 'Hero Overlay Type', 'uppercase' ),
		'section'  => 'design',
		'default'  => 'gradient',
		'priority' => 10,
		'choices'  => array(
			'transparent'     => esc_html__( 'Transparent', 'uppercase' ),
			'solid'           => esc_html__( 'Solid', 'uppercase' ),
			'gradient'        => esc_html__( 'Gradient', 'uppercase' ),
			'gradient-top'    => esc_html__( 'Gradient Top', 'uppercase' ),
			'gradient-bottom' => esc_html__( 'Gradient Bottom', 'uppercase' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'tile_overlay_type',
		'label'    => esc_html__( 'Post Tile Overlay Type', 'uppercase' ),
		'section'  => 'design',
		'default'  => 'gradient-bottom',
		'priority' => 10,
		'choices'  => array(
			'transparent'     => esc_html__( 'Transparent', 'uppercase' ),
			'solid'           => esc_html__( 'Solid', 'uppercase' ),
			'gradient-top'    => esc_html__( 'Gradient Top', 'uppercase' ),
			'gradient-bottom' => esc_html__( 'Gradient Bottom', 'uppercase' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'design_collapsible_border_radius',
		'section'  => 'design',
		'label'    => esc_html__( 'Border Radius', 'uppercase' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'custom',
		'settings'    => 'design_border_radius_desc',
		'section'     => 'design',
		'description' => esc_html__( 'Here you can change default border radius for post Featured Image, Buttons and Form Inputs. For example 10px or 50%. If the input is empty, original value will be used.', 'uppercase' ),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_image_border_radius',
		'label'             => esc_html__( 'Image Border Radius', 'uppercase' ),
		'section'           => 'design',
		'default'           => '0px',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-image-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_button_border_radius',
		'label'             => esc_html__( 'Button Border Radius', 'uppercase' ),
		'section'           => 'design',
		'default'           => '0px',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-button-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_input_border_radius',
		'label'             => esc_html__( 'Form Input Border Radius', 'uppercase' ),
		'section'           => 'design',
		'default'           => '0px',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-input-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);
