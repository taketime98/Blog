<?php
/**
 * Miscellaneous Settings
 *
 * @package Uppercase
 */

CSCO_Kirki::add_section(
	'miscellaneous',
	array(
		'title'    => esc_html__( 'Miscellaneous Settings', 'uppercase' ),
		'priority' => 60,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'misc_published_date',
		'label'    => esc_html__( 'Display published date instead of modified date', 'uppercase' ),
		'section'  => 'miscellaneous',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'text',
		'settings' => 'misc_search_placeholder',
		'label'    => esc_html__( 'Search Form Placeholder', 'uppercase' ),
		'section'  => 'miscellaneous',
		'default'  => esc_html__( 'Type to Search', 'uppercase' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'text',
		'settings' => 'misc_label_more',
		'label'    => esc_html__( '"Read More" Link / Button Label', 'uppercase' ),
		'section'  => 'miscellaneous',
		'default'  => esc_html__( 'Read More', 'uppercase' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'misc_classic_gallery_alignment',
		'label'    => esc_html__( 'Alignment of Galleries in Classic Block', 'uppercase' ),
		'section'  => 'miscellaneous',
		'default'  => 'default',
		'priority' => 10,
		'choices'  => array(
			'default' => esc_html__( 'Default', 'uppercase' ),
			'wide'    => esc_html__( 'Wide', 'uppercase' ),
			'large'   => esc_html__( 'Large', 'uppercase' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'misc_align_content',
		'label'    => esc_html__( 'Vertical Alignment', 'uppercase' ),
		'section'  => 'miscellaneous',
		'default'  => 'bottom',
		'priority' => 10,
		'choices'  => array(
			'top'    => esc_html__( 'Top', 'uppercase' ),
			'bottom' => esc_html__( 'Bottom', 'uppercase' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'radio',
		'settings'    => 'webfonts_load_method',
		'label'       => esc_html__( 'Webfonts Load Method', 'uppercase' ),
		'description' => esc_html__( 'Please', 'uppercase' ) . ' <a href="' . add_query_arg( array( 'action' => 'kirki-reset-cache' ), get_site_url() ) . '" target="_blank">' . esc_html__( 'reset font cache', 'uppercase' ) . '</a> ' . esc_html__( 'after saving.', 'uppercase' ),
		'section'     => 'miscellaneous',
		'default'     => 'async',
		'priority'    => 10,
		'choices'     => array(
			'async' => esc_html__( 'Asynchronous', 'uppercase' ),
			'link'  => esc_html__( 'Render-Blocking', 'uppercase' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'textarea',
		'settings' => '404_text',
		'label'    => esc_html__( '404 Page Text', 'uppercase' ),
		'section'  => 'miscellaneous',
		'default'  => esc_html__( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place. Perhaps searching can help.', 'uppercase' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'remove_comment_field_url',
		'label'    => esc_html__( 'Remove website field from comment form', 'uppercase' ),
		'section'  => 'miscellaneous',
		'default'  => false,
		'priority' => 10,
	)
);

if ( function_exists( 'yoast_breadcrumb' ) || function_exists( 'rank_math_the_breadcrumbs' ) ) {
	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'checkbox',
			'settings' => 'hide_last_breadcrumb',
			'label'    => esc_html__( 'Remove the last breadcrumb title item', 'uppercase' ),
			'section'  => 'wpseo_breadcrumbs_customizer_section',
			'default'  => true,
			'priority' => 10,
		)
	);
}
