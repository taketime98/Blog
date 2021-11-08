<?php
/**
 * Additional Content.
 *
 * @package Uppercase
 */

/**
 * Define array of Additional Content Locations
 */
function csco_get_custom_content_locations() {
	$content = array(
		array(
			'slug'     => 'entry_header',
			'name'     => esc_html__( 'Header', 'uppercase' ),
			'template' => array( 'home', 'front_page', 'archive', 'single', 'page' ),
		),
		array(
			'slug'     => 'content_inner',
			'name'     => esc_html__( 'Content Area', 'uppercase' ),
			'template' => array( 'home', 'front_page', 'archive', 'single', 'page' ),
		),
		array(
			'slug'     => 'main',
			'name'     => esc_html__( 'Main', 'uppercase' ),
			'template' => array( 'home', 'front_page', 'archive' ),
		),
		array(
			'slug'     => 'post',
			'name'     => esc_html__( 'Post', 'uppercase' ),
			'template' => array( 'single' ),
		),
		array(
			'slug'     => 'post_content',
			'name'     => esc_html__( 'Post Content', 'uppercase' ),
			'template' => array( 'single' ),
		),
		array(
			'slug'     => 'page',
			'name'     => esc_html__( 'Page', 'uppercase' ),
			'template' => array( 'page' ),
		),
		array(
			'slug'     => 'page_content',
			'name'     => esc_html__( 'Page Content', 'uppercase' ),
			'template' => array( 'page' ),
		),
		array(
			'slug'     => 'author',
			'name'     => esc_html__( 'Post Author', 'uppercase' ),
			'template' => array( 'single' ),
		),
		array(
			'slug'     => 'pagination',
			'name'     => esc_html__( 'Post Pagination', 'uppercase' ),
			'template' => array( 'single' ),
		),
		array(
			'slug'     => 'comments',
			'name'     => esc_html__( 'Comments', 'uppercase' ),
			'template' => array( 'single', 'page' ),
		),
		array(
			'slug'     => 'load_nextpost',
			'name'     => esc_html__( 'Auto Loaded Posts', 'uppercase' ),
			'template' => array( 'single' ),
		),
	);
	return apply_filters( 'csco_custom_content_locations', $content );
}

/**
 * Define array of Additional Content Pages
 */
function csco_get_custom_content_pages() {
	$pages = array(
		'home'       => esc_html__( 'Homepage', 'uppercase' ),
		'front_page' => esc_html__( 'Front Page', 'uppercase' ),
		'archive'    => esc_html__( 'Archive', 'uppercase' ),
		'single'     => esc_html__( 'Post', 'uppercase' ),
		'page'       => esc_html__( 'Page', 'uppercase' ),
	);
	return $pages;
}

/**
 * Init Additional Content
 */
function csco_init_custom_content() {

	$locations = csco_get_custom_content_locations();
	$pages     = csco_get_custom_content_pages();

	/**
	 * Customizer Settings
	 */

	CSCO_Kirki::add_panel(
		'custom_content', array(
			'title'    => esc_html__( 'Additional Content', 'uppercase' ),
			'priority' => 200,
		)
	);

	CSCO_Kirki::add_section(
		'custom_content_general', array(
			'title'    => esc_html__( 'General', 'uppercase' ),
			'panel'    => 'custom_content',
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod', array(
			'type'        => 'toggle',
			'settings'    => 'custom_content_adsense',
			'label'       => esc_html__( 'Load Google AdSense Scripts', 'uppercase' ),
			'description' => esc_html__( 'Enable this if you\'re using Google AdSense.', 'uppercase' ),
			'section'     => 'custom_content_general',
			'default'     => false,
			'priority'    => 10,
		)
	);

	foreach ( $pages as $page_slug => $page_name ) {

		CSCO_Kirki::add_section(
			'custom_content_' . $page_slug, array(
				'title'    => $page_name,
				'panel'    => 'custom_content',
				'priority' => 10,
			)
		);

		foreach ( $locations as $location ) {

			// Check if ads location is supported by the current page template.
			if ( in_array( $page_slug, $location['template'], true ) ) {

				CSCO_Kirki::add_field(
					'csco_theme_mod', array(
						'type'              => 'textarea',
						'settings'          => 'custom_content_' . $page_slug . '_' . $location['slug'] . '_before',
						'label'             => esc_html__( 'Before', 'uppercase' ) . ' ' . $location['name'],
						'section'           => 'custom_content_' . $page_slug,
						'default'           => '',
						'priority'          => 10,
						'sanitize_callback' => 'csco_unsanitize',
					)
				);

				CSCO_Kirki::add_field(
					'csco_theme_mod', array(
						'type'              => 'textarea',
						'settings'          => 'custom_content_' . $page_slug . '_' . $location['slug'] . '_after',
						'label'             => esc_html__( 'After', 'uppercase' ) . ' ' . $location['name'],
						'section'           => 'custom_content_' . $page_slug,
						'default'           => '',
						'priority'          => 10,
						'sanitize_callback' => 'csco_unsanitize',
					)
				);

			}
		}
	}

	/**
	 * Removes Sanitizing
	 *
	 * @param string $content Initial content.
	 */
	function csco_unsanitize( $content ) {
		return $content;
	}

	/**
	 * Load Google AdSense scripts
	 */
	function csco_custom_content_enqueue_scripts() {

		if ( get_theme_mod( 'custom_content_adsense', false ) ) {
			// Register Google AdSense scripts.
			wp_register_script( 'csco_adsense', '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js' );

			// Enqueue Google AdSense.
			wp_enqueue_script( 'csco_adsense' );

		}
	}
	add_action( 'wp_enqueue_scripts', 'csco_custom_content_enqueue_scripts' );

	/**
	 * Actions
	 */
	function csco_custom_content_display() {

		// Get current action name.
		$current = current_filter();

		// Get ads pages.
		$pages = csco_get_custom_content_pages();

		foreach ( $pages as $page_slug => $page_name ) {

			$location = "is_$page_slug";

			// On normal pages only.
			if ( 'is_page' === $location ) {
				$location = is_front_page() || is_home() ? null : $location;
			}

			if ( function_exists( $location ) && $location() ) {

				// Get ads locations.
				$locations = csco_get_custom_content_locations();

				// Loop through all locations.
				foreach ( $locations as $location ) {
					// Check if ads location is supported by the current page template.
					if ( in_array( $page_slug, $location['template'], true ) ) {
						// Before.
						if ( 'csco_' . $location['slug'] . '_before' === $current ) {
							$code = get_theme_mod( 'custom_content_' . $page_slug . '_' . $location['slug'] . '_before' );
							if ( $code ) {
								echo '<section class="cs-custom-content cs-custom-content-' . esc_html( $location['slug'] ) . '-before">' . do_shortcode( $code ) . '</section>';
							}
						}
						// After.
						if ( 'csco_' . $location['slug'] . '_after' === $current ) {
							$code = get_theme_mod( 'custom_content_' . $page_slug . '_' . $location['slug'] . '_after' );
							if ( $code ) {
								echo '<section class="cs-custom-content cs-custom-content-' . esc_html( $location['slug'] ) . '-after">' . do_shortcode( $code ) . '</section>';
							}
						}
					}
				}
			}
		}
	}

	foreach ( $locations as $location ) {
		add_action( 'csco_' . $location['slug'] . '_before', 'csco_custom_content_display', 5 );
		add_action( 'csco_' . $location['slug'] . '_after', 'csco_custom_content_display', 999 );
	}
}

add_action( 'init', 'csco_init_custom_content' );
