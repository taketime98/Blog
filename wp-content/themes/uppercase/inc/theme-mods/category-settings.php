<?php
/**
 * Category Settings
 *
 * @package Uppercase
 */

CSCO_Kirki::add_section(
	'category_settings',
	array(
		'title'    => esc_html__( 'Category Settings', 'uppercase' ),
		'priority' => 50,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'category_subcategories',
		'label'    => esc_html__( 'Display subcategory filter', 'uppercase' ),
		'section'  => 'category_settings',
		'default'  => true,
		'priority' => 10,
	)
);
