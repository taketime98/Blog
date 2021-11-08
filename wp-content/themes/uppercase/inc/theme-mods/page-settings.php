<?php
/**
 * Page Settings
 *
 * @package Uppercase
 */

CSCO_Kirki::add_section(
	'page_settings',
	array(
		'title'    => esc_html__( 'Page Settings', 'uppercase' ),
		'priority' => 50,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'page_comments_simple',
		'label'    => esc_html__( 'Display comments without the View Comments button', 'uppercase' ),
		'section'  => 'page_settings',
		'default'  => false,
		'priority' => 10,
	)
);
