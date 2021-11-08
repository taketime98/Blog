<?php
/**
 * Theme Demos
 *
 * @package Uppercase
 */

/**
 * Theme Demos
 */
function csco_theme_demos() {
	$demos = array(
		// Theme mods imported with every demo.
		'common_mods' => array(),
		// Specific demos.
		'demos'       =>
		array('uppercase' => array(
			'name'              => 'Uppercase',
			'preview_image_url' => '/inc/demo-import/theme-demos/uppercase.png',
			'preset'            => 'uppercase',
			'mods'              => array (
				'sidebar_title' => 'Inspiration, Tips and Solutions for Creative Professionals',
				'home_layout' => 'grid',
				'home_image_orientation' => 'landscape',
				'archive_layout' => 'grid',
				'archive_image_orientation' => 'landscape',
				'topbar_social_links' => true,
				'sidebar_subscribe' => true,
				'related_image_orientation' => 'landscape',
				'related_image_size' => 'csco-thumbnail',
				'post_meta' =>
				array (
				0 => 'category',
				1 => 'author',
				2 => 'date',
				3 => 'reading_time',
				),
				'post_subscribe_name' => true,
				'color_sidebar_background' => '#1c1c1c',
				'home_columns_desktop' => '2',
				'section_heading' => 'style-1',
				'section_heading_font' =>
				array (
				'font-family' => 'Inter',
				'font-size' => '1rem',
				'variant' => '500',
				'letter-spacing' => 'normal',
				'text-transform' => 'none',
				'subsets' =>
				array (
				0 => 'latin',
				),
				'font-backup' => '',
				'font-weight' => 500,
				'font-style' => 'normal',
				),
				'font_primary' =>
				array (
				'font-family' => 'Inter',
				'font-size' => '0.625rem',
				'variant' => '500',
				'letter-spacing' => '0.15em',
				'text-transform' => 'uppercase',
				'subsets' =>
				array (
				0 => 'latin',
				),
				'font-backup' => '',
				'font-weight' => 500,
				'font-style' => 'normal',
				),
				'font_secondary' =>
				array (
				'font-family' => 'Inter',
				'font-size' => '0.6875rem',
				'variant' => '500',
				'letter-spacing' => 'normal',
				'text-transform' => 'none',
				'subsets' =>
				array (
				0 => 'latin',
				),
				'font-backup' => '',
				'font-weight' => 500,
				'font-style' => 'normal',
				),
				'font_category' =>
				array (
				'font-family' => 'Inter',
				'font-size' => '0.625rem',
				'variant' => '500',
				'letter-spacing' => '0.15em',
				'text-transform' => 'uppercase',
				'subsets' =>
				array (
				0 => 'latin',
				),
				'font-backup' => '',
				'font-weight' => 500,
				'font-style' => 'normal',
				),
				'post_author' => true,
				'color_overlay' => 'rgba(0,0,0,0.25)',
				'hero_overlay_type' => 'gradient',
				'tile_overlay_type' => 'gradient-bottom',
				'misc_align_content' => 'bottom',
				'hero_scheme' => 'dark',
				'misc_scheme' => 'dark',
				'hero_title' => 'Share your greatest stories with Uppercase. The <em>perfect</em> WordPess blog theme for any genre of content.',
				'font_page_heading' =>
				array (
				'font-size' => '2.5rem',
				'font-backup' => '',
				'variant' => 'regular',
				'font-weight' => 400,
				'font-style' => 'normal',
				),
				'home_tile_image_orientation' => 'square',
				'home_tile_large_image_orientation' => 'landscape',
				'home_excerpt' => true,
				'home_large_excerpt' => false,
				'font_home_heading' =>
				array (
				'font-size' => '1.5rem',
				'font-backup' => '',
				'variant' => 'regular',
				'font-weight' => 400,
				'font-style' => 'normal',
				),
				'font_home_large_heading' =>
				array (
				'font-size' => '2rem',
				'font-backup' => '',
				'variant' => 'regular',
				'font-weight' => 400,
				'font-style' => 'normal',
				),
				'gradient_overlay' => 'rgba(0,0,0,0.5)',
				'category_scheme' => 'none',
				'font_archive_large_heading' =>
				array (
				'font-size' => '2rem',
				'font-backup' => '',
				'variant' => 'regular',
				'font-weight' => 400,
				'font-style' => 'normal',
				),
				'archive_image_size_full' => 'csco-large',
				'archive_excerpt' => false,
				'archive_large_excerpt' => false,
				'archive_tile_image_orientation' => 'landscape-3-2',
				'post_load_nextpost' => true,
				'home_post_meta' =>
				array (
				0 => 'category',
				1 => 'shares',
				2 => 'reading_time',
				),
				'font_post_subtitle' =>
				array (
				'font-family' => 'inherit',
				'variant' => '',
				'font-size' => '1.25rem',
				'letter-spacing' => 'normal',
				'subsets' =>
				array (
				0 => 'latin',
				),
				'font-backup' => '',
				'font-weight' => 0,
				'font-style' => '',
				),
				),
							'mods_typekit'      => array (
				),
		), 'upflow' => array(
						'name'              => 'Upflow',
						'preview_image_url' => '/inc/demo-import/theme-demos/upflow.png',
						'preset'            => 'upflow',
						'mods'              => array (
		  'sidebar_title' => 'Inspiration, Tips and Solutions for Creative Professionals',
		  'home_layout' => 'list',
		  'home_image_orientation' => 'landscape-16-9',
		  'archive_layout' => 'grid',
		  'archive_image_orientation' => 'landscape',
		  'topbar_social_links' => true,
		  'sidebar_subscribe' => true,
		  'related_image_orientation' => 'landscape',
		  'related_image_size' => 'csco-thumbnail',
		  'post_meta' =>
		  array (
			0 => 'category',
			1 => 'author',
			2 => 'date',
			3 => 'reading_time',
		  ),
		  'post_subscribe_name' => true,
		  'color_sidebar_background' => '#1c1c1c',
		  'home_columns_desktop' => '2',
		  'section_heading' => 'style-1',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1.5rem',
			'variant' => '800',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 800,
			'font-style' => 'normal',
		  ),
		  'font_primary' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.875rem',
			'variant' => '800',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 800,
			'font-style' => 'normal',
		  ),
		  'font_secondary' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.6875rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_category' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.875rem',
			'variant' => '800',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 800,
			'font-style' => 'normal',
		  ),
		  'post_author' => true,
		  'color_overlay' => 'rgba(2,70,195,0.71)',
		  'hero_overlay_type' => 'solid',
		  'tile_overlay_type' => 'solid',
		  'misc_align_content' => 'bottom',
		  'hero_scheme' => 'dark',
		  'misc_scheme' => 'dark',
		  'hero_title' => 'Curated list of <em>breath-taking</em> startup cases and inspiration.',
		  'font_page_heading' =>
		  array (
			'font-size' => '3rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tile_image_orientation' => 'landscape-16-9',
		  'home_tile_large_image_orientation' => 'landscape',
		  'home_excerpt' => false,
		  'home_large_excerpt' => false,
		  'font_home_heading' =>
		  array (
			'font-size' => '1.5rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_home_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'gradient_overlay' => 'rgba(0,0,0,0.5)',
		  'category_scheme' => 'none',
		  'font_archive_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'archive_image_size_full' => 'csco-large',
		  'archive_excerpt' => false,
		  'archive_large_excerpt' => false,
		  'archive_tile_image_orientation' => 'landscape-3-2',
		  'post_load_nextpost' => true,
		  'home_post_meta' =>
		  array (
			0 => 'category',
			1 => 'date',
			2 => 'shares',
		  ),
		  'home_image_size' => 'csco-thumbnail-uncropped',
		  'home_image_width' => 'half',
		  'color_primary' => '#000000',
		  'color_accent' => '#000000',
		  'color_hero_background' => 'rgba(255,255,255,0.8)',
		  'color_button' => '#12449f',
		  'color_button_hover' => '#0a2a66',
		  'font_post_subtitle' =>
		  array (
			'font-family' => 'inherit',
			'font-size' => '1.25rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'font_base' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'line-height' => '1.5',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_meta' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.75rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_input' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.75rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_content' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_summary' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1.5rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_excerpt' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.9375rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_headings' =>
		  array (
			'font-family' => 'Inter',
			'variant' => '700',
			'line-height' => '1.25',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'font_menu' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '2.5rem',
			'variant' => '600',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'font_submenu' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1.25rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_submenu_small' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_secondarymenu' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_hero_background_dark' => 'rgba(13,77,144,0.85)',
		  'design_primary_border_radius' => '3px',
		  'color_post_title_hover' => '#094fd1',
		  'color_category' => '#b0b0b4',
		  'color_category_hover' => '#000000',
		  'color_secondary' => '#c4c4c4',
		  'color_site_background' => '#ffffff',
		  'color_base' => '#000000',
		  'color_component_background' => '#f8f8f8',
		  'color_component_background_dark' => 'rgba(18,68,159,0.72)',
		  'color_base_contrast_dark' => '#0f61fa',
		  'color_meta' => '#b0b0b4',
		),
						'mods_typekit'      => array (
		),
					), 'self' => array(
						'name'              => 'SELF',
						'preview_image_url' => '/inc/demo-import/theme-demos/self.png',
						'preset'            => 'self',
						'mods'              => array (
		  'sidebar_title' => 'Inspiration, Tips and Solutions for Creative Professionals',
		  'home_layout' => 'tile',
		  'home_image_orientation' => 'landscape',
		  'archive_layout' => 'grid',
		  'archive_image_orientation' => 'landscape',
		  'topbar_social_links' => true,
		  'sidebar_subscribe' => true,
		  'related_image_orientation' => 'landscape',
		  'related_image_size' => 'csco-thumbnail',
		  'post_meta' =>
		  array (
			0 => 'category',
			1 => 'author',
			2 => 'date',
			3 => 'reading_time',
		  ),
		  'post_subscribe_name' => true,
		  'color_sidebar_background' => '#1c1c1c',
		  'home_columns_desktop' => '2',
		  'section_heading' => 'style-1',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '2.5rem',
			'variant' => '600',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'font_primary' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '0.75rem',
			'variant' => '600',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'font_secondary' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '0.6875rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_category' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '0.625rem',
			'variant' => '500',
			'letter-spacing' => '0.15em',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'post_author' => true,
		  'color_overlay' => 'rgba(0,0,0,0.25)',
		  'hero_overlay_type' => 'transparent',
		  'tile_overlay_type' => 'transparent',
		  'misc_align_content' => 'bottom',
		  'hero_scheme' => 'dark',
		  'misc_scheme' => 'dark',
		  'hero_title' => 'Jump-start a <em>perfect</em> blog with Uppercase.',
		  'font_page_heading' =>
		  array (
			'font-size' => '4rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tile_image_orientation' => 'landscape-16-9',
		  'home_tile_large_image_orientation' => 'landscape',
		  'home_excerpt' => false,
		  'home_large_excerpt' => false,
		  'font_home_heading' =>
		  array (
			'font-size' => '2.5rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_home_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'gradient_overlay' => 'rgba(0,0,0,0.5)',
		  'category_scheme' => 'none',
		  'font_archive_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'archive_image_size_full' => 'csco-large',
		  'archive_excerpt' => false,
		  'archive_large_excerpt' => false,
		  'archive_tile_image_orientation' => 'landscape-3-2',
		  'post_load_nextpost' => false,
		  'home_post_meta' =>
		  array (
			0 => 'category',
			1 => 'date',
			2 => 'shares',
		  ),
		  'font_base' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'line-height' => '1.5',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_meta' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '0.8125rem',
			'variant' => '600',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'font_input' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '0.75rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_subtitle' =>
		  array (
			'font-family' => 'inherit',
			'font-size' => '1.25rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'font_post_content' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_summary' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_excerpt' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'font-size' => '0.9375rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_headings' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '600',
			'line-height' => '1.25',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'home_image_size' => 'csco-large',
		  'font_menu' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '2.5rem',
			'variant' => '600',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'font_submenu' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_submenu_small' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_secondarymenu' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_main_logo' =>
		  array (
			'font-family' => 'Poppins',
			'font-size' => '3rem',
			'variant' => '700',
			'letter-spacing' => 'normal',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'home_video_backgrounds' => false,
		  'archive_video_backgrounds' => false,
		),
						'mods_typekit'      => array (
		),
					), 'quicksand' => array(
						'name'              => 'Quicksand',
						'preview_image_url' => '/inc/demo-import/theme-demos/quicksand.png',
						'preset'            => 'quicksand',
						'mods'              => array (
		  'sidebar_title' => 'Inspiration, Tips and Solutions for Creative Professionals',
		  'home_layout' => 'tile-mixed',
		  'home_image_orientation' => 'landscape',
		  'archive_layout' => 'grid',
		  'archive_image_orientation' => 'landscape',
		  'topbar_social_links' => true,
		  'sidebar_subscribe' => true,
		  'related_image_orientation' => 'landscape',
		  'related_image_size' => 'csco-thumbnail',
		  'post_meta' =>
		  array (
			0 => 'category',
			1 => 'author',
			2 => 'date',
			3 => 'reading_time',
		  ),
		  'post_subscribe_name' => true,
		  'color_sidebar_background' => '#1c1c1c',
		  'home_columns_desktop' => '2',
		  'section_heading' => 'style-1',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Bebas Neue',
			'font-size' => '2rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_primary' =>
		  array (
			'font-family' => 'Bebas Neue',
			'font-size' => '0.875rem',
			'variant' => 'regular',
			'letter-spacing' => '0.075em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_secondary' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.75rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_category' =>
		  array (
			'font-family' => 'Bebas Neue',
			'font-size' => '0.875rem',
			'variant' => 'regular',
			'letter-spacing' => '0.05em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_author' => true,
		  'color_overlay' => 'rgba(0,0,0,0.25)',
		  'hero_overlay_type' => 'gradient',
		  'tile_overlay_type' => 'gradient-bottom',
		  'misc_align_content' => 'bottom',
		  'hero_scheme' => 'dark',
		  'misc_scheme' => 'dark',
		  'hero_title' => 'Share your greatest <em>travel</em> stories with Uppercase.',
		  'font_page_heading' =>
		  array (
			'font-size' => '4rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tile_image_orientation' => 'landscape',
		  'home_tile_large_image_orientation' => 'landscape',
		  'home_excerpt' => false,
		  'home_large_excerpt' => false,
		  'font_home_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_home_large_heading' =>
		  array (
			'font-size' => '3rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'gradient_overlay' => 'rgba(0,0,0,0.5)',
		  'category_scheme' => 'none',
		  'font_archive_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'archive_image_size_full' => 'csco-large',
		  'archive_excerpt' => false,
		  'archive_large_excerpt' => false,
		  'archive_tile_image_orientation' => 'landscape-3-2',
		  'post_load_nextpost' => true,
		  'home_post_meta' =>
		  array (
			0 => 'category',
			1 => 'date',
			2 => 'shares',
		  ),
		  'font_base' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'line-height' => '1.5',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_meta' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.75rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_input' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.75rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_subtitle' =>
		  array (
			'font-family' => 'inherit',
			'font-size' => '1.25rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'font_post_content' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_summary' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_excerpt' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '0.9375rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_headings' =>
		  array (
			'font-family' => 'Bebas Neue',
			'variant' => 'regular',
			'line-height' => '1.25',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_menu' =>
		  array (
			'font-family' => 'Bebas Neue',
			'font-size' => '3rem',
			'variant' => 'regular',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_submenu' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_submenu_small' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_secondarymenu' =>
		  array (
			'font-family' => 'Bebas Neue',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_image_size' => 'csco-medium-uncropped',
		  'home_large_post_meta' =>
		  array (
			0 => 'category',
			1 => 'shares',
			2 => 'reading_time',
		  ),
		),
						'mods_typekit'      => array (
		),
					), 'absent-minded' => array(
						'name'              => 'Absent Minded',
						'preview_image_url' => '/inc/demo-import/theme-demos/absent-minded.png',
						'preset'            => 'absent-minded',
						'mods'              => array (
		  'sidebar_title' => 'Inspiration, Tips and Solutions for Creative Professionals',
		  'home_layout' => 'grid',
		  'home_image_orientation' => 'landscape',
		  'archive_layout' => 'grid',
		  'archive_image_orientation' => 'landscape',
		  'topbar_social_links' => true,
		  'sidebar_subscribe' => true,
		  'related_image_orientation' => 'landscape',
		  'related_image_size' => 'csco-thumbnail',
		  'post_meta' =>
		  array (
			0 => 'category',
			1 => 'author',
			2 => 'date',
			3 => 'reading_time',
		  ),
		  'post_subscribe_name' => true,
		  'color_sidebar_background' => '#1c1c1c',
		  'home_columns_desktop' => '2',
		  'section_heading' => 'style-1',
		  'post_author' => true,
		  'color_overlay' => 'rgba(0,0,0,0.25)',
		  'hero_overlay_type' => 'gradient',
		  'tile_overlay_type' => 'gradient-bottom',
		  'misc_align_content' => 'bottom',
		  'hero_scheme' => 'dark',
		  'misc_scheme' => 'dark',
		  'hero_title' => 'Design <em>inspiration</em> by<br>Absent Minded.',
		  'font_page_heading' =>
		  array (
			'font-size' => '3.5rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tile_image_orientation' => 'square',
		  'home_tile_large_image_orientation' => 'landscape',
		  'home_excerpt' => true,
		  'home_large_excerpt' => false,
		  'font_home_heading' =>
		  array (
			'font-size' => '1.5rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_home_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'gradient_overlay' => 'rgba(0,0,0,0.5)',
		  'category_scheme' => 'none',
		  'font_archive_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'archive_image_size_full' => 'csco-large',
		  'archive_excerpt' => false,
		  'archive_large_excerpt' => false,
		  'archive_tile_image_orientation' => 'landscape-3-2',
		  'post_load_nextpost' => true,
		  'home_post_meta' =>
		  array (
			0 => 'category',
			1 => 'shares',
			2 => 'reading_time',
		  ),
		  'font_post_subtitle' =>
		  array (
			'font-family' => 'inherit',
			'variant' => '',
			'font-size' => '1.25rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'font_summary' =>
		  array (
			'font-family' => 'Inter',
			'variant' => 'regular',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_more_button' => false,
		  'color_button' => '#665741',
		  'home_pagination_type' => 'infinite',
		  'color_scheme' => 'dark',
		  'color_scheme_toggle' => true,
		  'home_image_size' => 'csco-medium',
		),
						'mods_typekit'      => array (
		  'font_headings' =>
		  array (
			'font-family' => 'minerva-modern',
			'variant' => 'regular',
			'line-height' => '1.25',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_submenu' =>
		  array (
			'font-family' => 'minerva-modern',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'aktiv-grotesk-extended',
			'font-size' => '2rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_primary' =>
		  array (
			'font-family' => 'aktiv-grotesk-extended',
			'font-size' => '0.625rem',
			'variant' => 'regular',
			'letter-spacing' => '0.15em',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_category' =>
		  array (
			'font-family' => 'aktiv-grotesk-extended',
			'font-size' => '0.625rem',
			'variant' => 'regular',
			'letter-spacing' => '0.15em',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_menu' =>
		  array (
			'font-family' => 'aktiv-grotesk-extended',
			'font-size' => '2.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_secondarymenu' =>
		  array (
			'font-family' => 'aktiv-grotesk-extended',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_secondary' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'font-size' => '0.875rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_base' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'line-height' => '1.5',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_meta' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'font-size' => '0.875rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_input' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'font-size' => '0.75rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_content' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'font-size' => '1.125rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_excerpt' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'font-size' => '1.125rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_submenu_small' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'font-size' => '1.125rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'kendrick-bronson' => array(
						'name'              => 'Kendrick Bronson',
						'preview_image_url' => '/inc/demo-import/theme-demos/kendrick-bronson.png',
						'preset'            => 'kendrick-bronson',
						'mods'              => array (
		  'sidebar_title' => 'Inspiration, Tips and Solutions for Creative Professionals',
		  'home_layout' => 'large',
		  'home_image_orientation' => 'landscape',
		  'archive_layout' => 'grid',
		  'archive_image_orientation' => 'landscape',
		  'topbar_social_links' => true,
		  'sidebar_subscribe' => true,
		  'related_image_orientation' => 'landscape',
		  'related_image_size' => 'csco-thumbnail',
		  'post_meta' =>
		  array (
			0 => 'category',
			1 => 'date',
			2 => 'reading_time',
			3 => 'shares',
		  ),
		  'post_subscribe_name' => true,
		  'color_sidebar_background' => '#1c1c1c',
		  'home_columns_desktop' => '2',
		  'section_heading' => 'style-1',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Barlow Semi Condensed',
			'font-size' => '2rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_primary' =>
		  array (
			'font-family' => 'Barlow Condensed',
			'font-size' => '0.875rem',
			'variant' => '600',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'font_secondary' =>
		  array (
			'font-family' => 'Barlow',
			'font-size' => '0.6875rem',
			'variant' => '500',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_category' =>
		  array (
			'font-family' => 'Barlow Condensed',
			'font-size' => '1rem',
			'variant' => '600',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'post_author' => false,
		  'color_overlay' => 'rgba(0,0,0,0.35)',
		  'hero_overlay_type' => 'solid',
		  'tile_overlay_type' => 'solid',
		  'misc_align_content' => 'bottom',
		  'hero_scheme' => 'dark',
		  'misc_scheme' => 'dark',
		  'hero_title' => 'Summertime, and the living is easy.<br>Lifestyle blog <em>by</em> Kendrich Bronson.',
		  'font_page_heading' =>
		  array (
			'font-size' => '3.5rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tile_image_orientation' => 'square',
		  'home_tile_large_image_orientation' => 'landscape',
		  'home_excerpt' => true,
		  'home_large_excerpt' => false,
		  'font_home_heading' =>
		  array (
			'font-size' => '1.5rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_home_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'gradient_overlay' => 'rgba(0,0,0,0.5)',
		  'category_scheme' => 'none',
		  'font_archive_large_heading' =>
		  array (
			'font-size' => '2rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'archive_image_size_full' => 'csco-large',
		  'archive_excerpt' => false,
		  'archive_large_excerpt' => false,
		  'archive_tile_image_orientation' => 'landscape-3-2',
		  'post_load_nextpost' => true,
		  'home_post_meta' =>
		  array (
			0 => 'category',
			1 => 'shares',
			2 => 'reading_time',
		  ),
		  'font_base' =>
		  array (
			'font-family' => 'Barlow',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'line-height' => '1.5',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_meta' =>
		  array (
			'font-family' => 'Barlow',
			'font-size' => '0.6875rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_input' =>
		  array (
			'font-family' => 'Barlow',
			'font-size' => '0.875rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_post_subtitle' =>
		  array (
			'font-family' => 'inherit',
			'variant' => '',
			'font-size' => '1.25rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'font_post_content' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => 'regular',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_summary' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => 'regular',
			'font-size' => '1rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_excerpt' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => 'regular',
			'font-size' => '0.9375rem',
			'letter-spacing' => 'normal',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_headings' =>
		  array (
			'font-family' => 'Barlow Semi Condensed',
			'variant' => '500',
			'line-height' => '1.25',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_menu' =>
		  array (
			'font-family' => 'Barlow Semi Condensed',
			'font-size' => '2.5rem',
			'variant' => '500',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'font_submenu' =>
		  array (
			'font-family' => 'Barlow Semi Condensed',
			'font-size' => '1.5rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_submenu_small' =>
		  array (
			'font-family' => 'Inter',
			'font-size' => '1rem',
			'variant' => 'regular',
			'letter-spacing' => 'normal',
			'text-transform' => 'none',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'font_secondarymenu' =>
		  array (
			'font-family' => 'Barlow Semi Condensed',
			'font-size' => '1.25rem',
			'variant' => '600',
			'letter-spacing' => 'normal',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'post_load_nextpost_reverse' => true,
		  'related' => false,
		  'font_main_logo' =>
		  array (
			'font-family' => 'Barlow Condensed',
			'font-size' => '1.5rem',
			'variant' => '600',
			'letter-spacing' => 'normal',
			'text-transform' => 'uppercase',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'post_subscribe_title' => 'Subscribe to my regular blog updates delivered straight to your inbox',
		),
						'mods_typekit'      => array (
		),
		)),
	);
	return $demos;
}
add_filter( 'csco_theme_demos', 'csco_theme_demos' );
