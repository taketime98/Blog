<?php
/**
 * Site Identity
 *
 * @package Uppercase
 */

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'image',
		'settings'    => 'logo',
		'label'       => esc_html__( 'Light Logo (default)', 'uppercase' ),
		'description' => esc_html__( 'The light logo is used on dark backgrounds. The logo should be white or light gray.. Logo image will be displayed in its original image dimensions. Please upload the 2x version of your logo via Media Library with ', 'uppercase' ) . '<code>@2x</code>' . esc_html__( ' suffix for supporting Retina screens. For example ', 'uppercase' ) . '<code>logo@2x.png</code>' . esc_html__( '. Recommended maximum height is 40px (80px for Retina version).', 'uppercase' ),
		'section'     => 'title_tagline',
		'priority'    => 0,
		'choices'     => array(
			'save_as' => 'id',
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'image',
		'settings'        => 'logo_dark',
		'label'           => esc_html__( 'Dark Logo', 'uppercase' ),
		'description'     => esc_html__( 'The dark logo is used on light backgrounds. The logo should be black or dark gray.', 'uppercase' ),
		'section'         => 'title_tagline',
		'priority'        => 0,
		'choices'         => array(
			'save_as' => 'id',
		),
		'active_callback' => array(
			array(
				'setting'  => 'logo',
				'operator' => '!=',
				'value'    => '',
			),
		),
	)
);
