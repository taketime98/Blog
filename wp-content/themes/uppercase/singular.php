<?php
/**
 * The template for displaying single posts and pages.
 *
 * @package Uppercase
 */

get_header();

do_action( 'csco_main_before' );

while ( have_posts() ) :
	the_post();

	do_action( 'csco_' . get_post_type() . '_before' );

		get_template_part( 'template-parts/content-singular' );

	do_action( 'csco_' . get_post_type() . '_after' );

endwhile;

do_action( 'csco_main_after' );

get_footer();
