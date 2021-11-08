<?php
/**
 * Editor Settings.
 *
 * @package Uppercase
 */

/**
 * Register breakpoints for Canvas
 */
function csco_register_breakpoints() {
	return array(
		'mobile'  => 599,  // <=599
		'tablet'  => 1019, // <=1019
		'desktop' => 1020, // >=1020
	);
}
add_filter( 'canvas_register_breakpoints', 'csco_register_breakpoints' );

/**
 * Adds classes to <div class="editor-styles-wrapper"> tag
 */
function csco_block_editor_wrapper() {
	$post_id = get_the_ID();

	if ( ! $post_id ) {
		return;
	}

	// Set post type.
	$post_type = sprintf( 'post-type-%s', get_post_type( $post_id ) );

	wp_enqueue_script(
		'csco-editor-wrapper',
		get_template_directory_uri() . '/assets/static/js/gutenberg-wrapper.js',
		array(
			'wp-editor',
			'wp-element',
			'wp-compose',
			'wp-data',
			'wp-plugins',
		),
		csco_get_theme_data( 'Version' ),
		true
	);

	wp_localize_script(
		'csco-editor-wrapper',
		'cscoGWrapper',
		array(
			'post_type' => $post_type,
		)
	);

	wp_enqueue_script(
		'csco-editor-wrapper',
		get_template_directory_uri() . '/assets/static/js/gutenberg-scripts.js',
		array(
			'wp-editor',
			'wp-element',
			'wp-compose',
			'wp-data',
			'wp-plugins',
		),
		csco_get_theme_data( 'Version' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'csco_block_editor_wrapper' );

/**
 * Change editor color palette.
 */
function csco_change_editor_color_palette() {
	// Editor Color Palette.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Blue', 'uppercase' ),
				'slug'  => 'blue',
				'color' => '#59BACC',
			),
			array(
				'name'  => esc_html__( 'Green', 'uppercase' ),
				'slug'  => 'green',
				'color' => '#58AD69',
			),
			array(
				'name'  => esc_html__( 'Orange', 'uppercase' ),
				'slug'  => 'orange',
				'color' => '#FFBC49',
			),
			array(
				'name'  => esc_html__( 'Red', 'uppercase' ),
				'slug'  => 'red',
				'color' => '#e32c26',
			),
			array(
				'name'  => esc_html__( 'Pale Pink', 'uppercase' ),
				'slug'  => 'pale-pink',
				'color' => '#f78da7',
			),
			array(
				'name'  => esc_html__( 'White', 'uppercase' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => esc_html__( 'Gray 100', 'uppercase' ),
				'slug'  => 'gray-100',
				'color' => '#f8f9fb',
			),
			array(
				'name'  => esc_html__( 'Gray 200', 'uppercase' ),
				'slug'  => 'gray-200',
				'color' => '#e9ecef',
			),
			array(
				'name'  => esc_html__( 'Secondary', 'uppercase' ),
				'slug'  => 'secondary',
				'color' => get_theme_mod( 'color_secondary', '#818181' ),
			),
			array(
				'name'  => esc_html__( 'Black', 'uppercase' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
		)
	);
}
add_action( 'after_setup_theme', 'csco_change_editor_color_palette' );

/**
 * Change editor font size.
 */
function csco_change_editor_font_size() {
	// Editor Font Size.
	add_theme_support( 'editor-font-sizes',
		array(
			array(
				'name' => esc_html__( 'Small', 'uppercase' ),
				'size' => 12,
				'slug' => 'small',
			),
			array(
				'name' => esc_html__( 'Regular', 'uppercase' ),
				'size' => 16,
				'slug' => 'regular',
			),
			array(
				'name' => esc_html__( 'Large', 'uppercase' ),
				'size' => 24,
				'slug' => 'large',
			),
			array(
				'name' => esc_html__( 'Huge', 'uppercase' ),
				'size' => 30,
				'slug' => 'huge',
			),
		)
	);
}
add_action( 'after_setup_theme', 'csco_change_editor_font_size' );
