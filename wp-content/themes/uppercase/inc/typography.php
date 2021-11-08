<?php
/**
 * Typography
 *
 * @package Uppercase
 */

?>
<style id='csco-theme-typography'>
	:root {
		/* Base Font */
		--cs-font-base-family: <?php csco_typography( 'font_base', 'font-family', 'Inter' ); ?>;
		--cs-font-base-size: <?php csco_typography( 'font_base', 'font-size', '1rem' ); ?>;
		--cs-font-base-weight: <?php csco_typography( 'font_base', 'font-weight', '400' ); ?>;
		--cs-font-base-style: <?php csco_typography( 'font_base', 'font-style', 'normal' ); ?>;
		--cs-font-base-letter-spacing: <?php csco_typography( 'font_base', 'letter-spacing', 'normal' ); ?>;
		--cs-font-base-line-height: <?php csco_typography( 'font_base', 'line-height', '1.5' ); ?>;

		/* Primary Font */
		--cs-font-primary-family: <?php csco_typography( 'font_primary', 'font-family', 'Inter' ); ?>;
		--cs-font-primary-size: <?php csco_typography( 'font_primary', 'font-size', '0.625rem' ); ?>;
		--cs-font-primary-weight: <?php csco_typography( 'font_primary', 'font-weight', '500' ); ?>;
		--cs-font-primary-style: <?php csco_typography( 'font_primary', 'font-style', 'normal' ); ?>;
		--cs-font-primary-letter-spacing: <?php csco_typography( 'font_primary', 'letter-spacing', '0.15em' ); ?>;
		--cs-font-primary-text-transform: <?php csco_typography( 'font_primary', 'text-transform', 'uppercase' ); ?>;

		/* Secondary Font */
		--cs-font-secondary-family: <?php csco_typography( 'font_secondary', 'font-family', 'Inter' ); ?>;
		--cs-font-secondary-size: <?php csco_typography( 'font_secondary', 'font-size', '0.6875rem' ); ?>;
		--cs-font-secondary-weight: <?php csco_typography( 'font_secondary', 'font-weight', '500' ); ?>;
		--cs-font-secondary-style: <?php csco_typography( 'font_secondary', 'font-style', 'normal' ); ?>;
		--cs-font-secondary-letter-spacing: <?php csco_typography( 'font_secondary', 'letter-spacing', 'normal' ); ?>;
		--cs-font-secondary-text-transform: <?php csco_typography( 'font_secondary', 'text-transform', 'none' ); ?>;

		/* Category Font */
		--cs-font-category-family: <?php csco_typography( 'font_category', 'font-family', 'Inter' ); ?>;
		--cs-font-category-size: <?php csco_typography( 'font_category', 'font-size', '0.625rem' ); ?>;
		--cs-font-category-weight: <?php csco_typography( 'font_category', 'font-weight', '500' ); ?>;
		--cs-font-category-style: <?php csco_typography( 'font_category', 'font-style', 'normal' ); ?>;
		--cs-font-category-letter-spacing: <?php csco_typography( 'font_category', 'letter-spacing', '0.15em' ); ?>;
		--cs-font-category-text-transform: <?php csco_typography( 'font_category', 'text-transform', 'uppercase' ); ?>;

		/* Used for mixed tile category. */
		--cs-font-mixed-tile-category-family: var(--cs-font-category-family);
		--cs-font-mixed-tile-category-size: var(--cs-font-category-size);
		--cs-font-mixed-tile-category-weight: var(--cs-font-category-weight);
		--cs-font-mixed-tile-category-style: var(--cs-font-category-style);
		--cs-font-mixed-tile-category-letter-spacing: var(--cs-font-category-letter-spacing);
		--cs-font-mixed-tile-category-text-transform: var(--cs-font-category-text-transform);

		/* Post Meta Font */
		--cs-font-post-meta-family: <?php csco_typography( 'font_post_meta', 'font-family', 'Inter' ); ?>;
		--cs-font-post-meta-size: <?php csco_typography( 'font_post_meta', 'font-size', '0.8125rem' ); ?>;
		--cs-font-post-meta-weight: <?php csco_typography( 'font_post_meta', 'font-weight', '400' ); ?>;
		--cs-font-post-meta-style: <?php csco_typography( 'font_post_meta', 'font-style', 'normal' ); ?>;
		--cs-font-post-meta-letter-spacing: <?php csco_typography( 'font_post_meta', 'letter-spacing', 'normal' ); ?>;
		--cs-font-post-meta-text-transform: <?php csco_typography( 'font_post_meta', 'text-transform', 'none' ); ?>;

		/* Used for post-meta mixed tile. */
		--cs-font-mixed-tile-post-meta-family: var(--cs-font-post-meta-family);
		--cs-font-mixed-tile-post-meta-size: var(--cs-font-post-meta-size);
		--cs-font-mixed-tile-post-meta-weight: var(--cs-font-post-meta-weight);
		--cs-font-mixed-tile-post-meta-style: var(--cs-font-post-meta-style);
		--cs-font-mixed-tile-post-meta-letter-spacing: var(--cs-font-post-meta-letter-spacing);
		--cs-font-mixed-tile-post-meta-text-transform: var(--cs-font-post-meta-text-transform);

		/* Input Font */
		--cs-font-input-family: <?php csco_typography( 'font_input', 'font-family', 'Inter' ); ?>;
		--cs-font-input-size: <?php csco_typography( 'font_input', 'font-size', '0.75rem' ); ?>;
		--cs-font-input-weight: <?php csco_typography( 'font_input', 'font-weight', '400' ); ?>;
		--cs-font-input-style: <?php csco_typography( 'font_input', 'font-style', 'normal' ); ?>;
		--cs-font-input-letter-spacing: <?php csco_typography( 'font_input', 'letter-spacing', 'normal' ); ?>;
		--cs-font-input-text-transform: <?php csco_typography( 'font_input', 'text-transform', 'none' ); ?>;

		/* Post Subtitle */
		--cs-font-post-subtitle-family: <?php csco_typography( 'font_post_subtitle', 'font-family', 'inherit' ); ?>;
		--cs-font-post-subtitle-weight: <?php csco_typography( 'font_post_subtitle', 'font-weight', '400' ); ?>;
		--cs-font-post-subtitle-size: <?php csco_typography( 'font_post_subtitle', 'font-size', '1.25rem' ); ?>;
		--cs-font-post-subtitle-letter-spacing: <?php csco_typography( 'font_post_subtitle', 'letter-spacing', 'normal' ); ?>;

		/* Post Content */
		--cs-font-post-content-family: <?php csco_typography( 'font_post_content', 'font-family', 'Inter' ); ?>;
		--cs-font-post-content-size: <?php csco_typography( 'font_post_content', 'font-size', '1rem' ); ?>;
		--cs-font-post-content-letter-spacing: <?php csco_typography( 'font_post_content', 'letter-spacing', 'normal' ); ?>;

		/* Summary */
		--cs-font-entry-summary-family: <?php csco_typography( 'font_summary', 'font-family', 'Inter' ); ?>;
		--cs-font-entry-summary-wegiht: <?php csco_typography( 'font_summary', 'font-weight', '400' ); ?>;
		--cs-font-entry-summary-size: <?php csco_typography( 'font_summary', 'font-size', '1rem' ); ?>;
		--cs-font-entry-summary-letter-spacing: <?php csco_typography( 'font_summary', 'letter-spacing', 'normal' ); ?>;

		/* Entry Excerpt */
		--cs-font-entry-excerpt-family: <?php csco_typography( 'font_excerpt', 'font-family', 'Inter' ); ?>;
		--cs-font-entry-excerpt-weight: <?php csco_typography( 'font_excerpt', 'font-weight', '400' ); ?>;
		--cs-font-entry-excerpt-size: <?php csco_typography( 'font_excerpt', 'font-size', '0.9375rem' ); ?>;
		--cs-font-entry-excerpt-letter-spacing: <?php csco_typography( 'font_excerpt', 'letter-spacing', 'normal' ); ?>;

		/* Entry Excerpt mixed tile */
		--cs-font-mixed-tile-entry-excerpt-family: var(--cs-font-entry-excerpt-family);
		--cs-font-mixed-tile-entry-excerpt-size: <?php csco_typography( 'font_excerpt_large', 'font-size', '1rem' ); ?>;
		--cs-font-mixed-tile-entry-excerpt-letter-spacing: var(--cs-font-entry-excerpt-letter-spacing);

		/* Logos --------------- */

		/* Main Logo */
		--cs-font-main-logo-family: <?php csco_typography( 'font_main_logo', 'font-family', 'Inter' ); ?>;
		--cs-font-main-logo-size: <?php csco_typography( 'font_main_logo', 'font-size', '1.5rem' ); ?>;
		--cs-font-main-logo-weight: <?php csco_typography( 'font_main_logo', 'font-weight', '500' ); ?>;
		--cs-font-main-logo-style: <?php csco_typography( 'font_main_logo', 'font-style', 'normal' ); ?>;
		--cs-font-main-logo-letter-spacing: <?php csco_typography( 'font_main_logo', 'letter-spacing', 'normal' ); ?>;
		--cs-font-main-logo-text-transform: <?php csco_typography( 'font_main_logo', 'text-transform', 'uppercase' ); ?>;

		/* Headings --------------- */

		/* Headings */
		--cs-font-headings-family: <?php csco_typography( 'font_headings', 'font-family', 'Inter' ); ?>;
		--cs-font-headings-weight: <?php csco_typography( 'font_headings', 'font-weight', '500' ); ?>;
		--cs-font-headings-style: <?php csco_typography( 'font_headings', 'font-style', 'normal' ); ?>;
		--cs-font-headings-line-height: <?php csco_typography( 'font_headings', 'line-height', '1.25' ); ?>;
		--cs-font-headings-letter-spacing: <?php csco_typography( 'font_headings', 'letter-spacing', 'normal' ); ?>;
		--cs-font-headings-text-transform: <?php csco_typography( 'font_headings', 'text-transform', 'none' ); ?>;

		/* Section Headings */
		--cs-font-section-headings-family: <?php csco_typography( 'section_heading_font', 'font-family', 'Inter' ); ?>;
		--cs-font-section-headings-size: <?php csco_typography( 'section_heading_font', 'font-size', '2.5rem' ); ?>;
		--cs-font-section-headings-weight: <?php csco_typography( 'section_heading_font', 'font-weight', '500' ); ?>;
		--cs-font-section-headings-style: <?php csco_typography( 'fsection_heading_font', 'font-style', 'normal' ); ?>;
		--cs-font-section-headings-letter-spacing: <?php csco_typography( 'section_heading_font', 'letter-spacing', 'normal' ); ?>;
		--cs-font-section-headings-text-transform: <?php csco_typography( 'section_heading_font', 'text-transform', 'none' ); ?>;

		/* Headings mixed tile */
		--cs-font-mixed-tile-headings-family: var(--cs-font-headings-family);
		--cs-font-mixed-tile-headings-weight: var(--cs-font-headings-weight);
		--cs-font-mixed-tile-headings-style: normal;
		--cs-font-mixed-tile-headings-line-height: var(--cs-font-headings-line-height);
		--cs-font-mixed-tile-headings-letter-spacing: var(--cs-font-headings-letter-spacing);
		--cs-font-mixed-tile-headings-text-transform: var(--cs-font-headings-text-transform);

		/* Menu Font --------------- */

		/* Menu */
		/* Used for main top level menu elements. */
		--cs-font-menu-family: <?php csco_typography( 'font_menu', 'font-family', 'Inter' ); ?>;
		--cs-font-menu-size: <?php csco_typography( 'font_menu', 'font-size', '2.5rem' ); ?>;
		--cs-font-menu-weight: <?php csco_typography( 'font_menu', 'font-weight', '400' ); ?>;
		--cs-font-menu-style: <?php csco_typography( 'font_menu', 'font-style', 'normal' ); ?>;
		--cs-font-menu-letter-spacing: <?php csco_typography( 'font_menu', 'letter-spacing', 'normal' ); ?>;
		--cs-font-menu-text-transform: <?php csco_typography( 'font_menu', 'text-transform', 'none' ); ?>;

		/* Submenu Font */
		/* Used for submenu elements. */
		--cs-font-submenu-family: <?php csco_typography( 'font_submenu', 'font-family', 'Inter' ); ?>;
		--cs-font-submenu-size: <?php csco_typography( 'font_submenu', 'font-size', '1.5rem' ); ?>;
		--cs-font-submenu-weight: <?php csco_typography( 'font_submenu', 'font-weight', '400' ); ?>;
		--cs-font-submenu-style: <?php csco_typography( 'font_submenu', 'font-style', 'normal' ); ?>;
		--cs-font-submenu-letter-spacing: <?php csco_typography( 'font_submenu', 'letter-spacing', 'normal' ); ?>;
		--cs-font-submenu-text-transform: <?php csco_typography( 'font_submenu', 'text-transform', 'none' ); ?>;

		/* Muti-Column Submenu Font */
		/* Used for multi-column submenu elements. */
		--cs-font-submenu-small-family: <?php csco_typography( 'font_submenu_small', 'font-family', 'Inter' ); ?>;
		--cs-font-submenu-small-size: <?php csco_typography( 'font_submenu_small', 'font-size', '1rem' ); ?>;
		--cs-font-submenu-small-weight: <?php csco_typography( 'font_submenu_small', 'font-weight', '400' ); ?>;
		--cs-font-submenu-small-style: <?php csco_typography( 'font_submenu_small', 'font-style', 'normal' ); ?>;
		--cs-font-submenu-small-letter-spacing: <?php csco_typography( 'font_submenu_small', 'letter-spacing', 'normal' ); ?>;
		--cs-font-submenu-small-text-transform: <?php csco_typography( 'font_submenu_small', 'text-transform', 'none' ); ?>;

		/* Secondary Menu Font. */
		/* Used for extra menu elements. */
		--cs-font-extra-menu-family: <?php csco_typography( 'font_secondarymenu', 'font-family', 'Inter' ); ?>;
		--cs-font-extra-menu-size: <?php csco_typography( 'font_secondarymenu', 'font-size', '1.5rem' ); ?>;
		--cs-font-secondarymenu-size: var(--cs-font-extra-menu-size);
		--cs-font-extra-menu-weight: <?php csco_typography( 'font_secondarymenu', 'font-weight', '400' ); ?>;
		--cs-font-extra-menu-style: <?php csco_typography( 'font_secondarymenu', 'font-style', 'normal' ); ?>;
		--cs-font-extra-menu-letter-spacing: <?php csco_typography( 'font_secondarymenu', 'letter-spacing', 'normal' ); ?>;
		--cs-font-extra-menu-text-transform: <?php csco_typography( 'font_secondarymenu', 'text-transform', 'none' ); ?>;
	}

	@media (min-width: 720px) {
		.cs-page-header-title,
		.cs-entry__header .cs-entry__title {
			font-size: <?php csco_typography( 'font_page_heading', 'font-size', '2.5rem' ); ?>;
		}
		.home .cs-posts-area .cs-entry__title,
		.blog .cs-posts-area .cs-entry__title {
			font-size: <?php csco_typography( 'font_home_heading', 'font-size', '1.5rem' ); ?>;
		}
		.home .cs-entry__outer-full .cs-entry__title,
		.blog .cs-entry__outer-full .cs-entry__title {
			--cs-font-mixed-tile-headings-size: <?php csco_typography( 'font_home_large_heading', 'font-size', '2rem' ); ?>;
		}
		.archive .cs-posts-area .cs-entry__title {
			font-size: <?php csco_typography( 'font_archive_heading', 'font-size', '1.25rem' ); ?>;
		}
		.archive .cs-entry__outer-full .cs-entry__title {
			--cs-font-mixed-tile-headings-size: <?php csco_typography( 'font_archive_large_heading', 'font-size', '2rem' ); ?>;
		}
	}

<?php do_action( 'csco_typography' ); ?>

</style>
