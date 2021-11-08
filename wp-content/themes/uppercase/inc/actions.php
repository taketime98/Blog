<?php
/**
 * All core theme actions.
 *
 * Please do not modify this file directly.
 * You may remove actions in your child theme by using remove_action().
 *
 * Please see /inc/partials.php for the list of partials,
 * added to actions.
 *
 * @package Uppercase
 */

/**
 * Main
 */
add_action( 'csco_main_before', 'csco_404_page_header', 100 );

/**
 * Singular
 */
add_action( 'csco_entry_content_before', 'csco_singular_post_type_before', 10 );
add_action( 'csco_entry_content_after', 'csco_singular_post_type_after', 999 );
add_action( 'csco_post_content_before', 'csco_post_subtitle', 10 );

/**
 * Entry Header
 */
add_action( 'csco_entry_header_info_end', 'csco_entry_prev_next' );

/**
 * Entry Sections
 */
add_action( 'csco_entry_content_after', 'csco_page_pagination', 10 );
add_action( 'csco_entry_content_after', 'csco_entry_tags', 20 );
add_action( 'csco_entry_content_after', 'csco_entry_share_button', 30 );
add_action( 'csco_entry_content_after', 'csco_entry_author', 40 );
add_action( 'csco_entry_content_after', 'csco_entry_comments', 50 );

/**
 * Post After Sections
 */
add_action( 'csco_post_after', 'csco_entry_subscribe', 10 );
add_action( 'csco_post_after', 'csco_entry_related', 20 );

/**
 * Template Page
 */
add_action( 'csco_entry_content_after', 'csco_meet_team', 10 );

/**
 * Dynamic kirki css
 */
add_action( 'kirki_dynamic_css', 'csco_kirki_dynamic_css' );
