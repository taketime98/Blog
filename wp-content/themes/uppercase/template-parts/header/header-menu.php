<?php
/**
 * The template part for displaying header menu.
 *
 * @package Uppercase
 */

$scheme = csco_color_scheme(
	get_theme_mod( 'color_component_background', 'rgba(255,255,255,0.8)' ),
	get_theme_mod( 'color_component_background_dark', 'rgba(0,0,0,0.5)' )
);

?>

<div class="cs-menu cs-component" <?php echo wp_kses( $scheme, 'post' ); ?>>
	<div class="cs-menu__inner">
		<?php
			csco_component( 'hero_nav_menu' );
			csco_component( 'secondary_nav_menu' );
		?>
	</div>
</div>
