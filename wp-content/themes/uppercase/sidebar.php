<?php
/**
 * The sidebar containing the page header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Uppercase
 */

$overlay_class = 'cs-page-header-overlay';

if ( csco_has_hero_background() ) {
	$overlay_class .= ' cs-video-wrap';
}
?>

<div class="cs-page-header-area" <?php csco_hero_scheme(); ?>>

	<div class="<?php echo esc_attr( $overlay_class ); ?>">

		<?php csco_component( 'hero_background' ); ?>

		<div class="cs-page-header-item">

			<?php csco_site_header(); ?>

			<div class="cs-page-header-inner">

				<?php get_template_part( 'template-parts/header/header', 'inner' ); ?>

			</div>
		</div>
	</div>

	<?php csco_component( 'site_search' ); ?>

	<?php
	if ( get_theme_mod( 'header_menu_button', true ) ) {
		get_template_part( 'template-parts/header/header', 'menu' );
	}
	?>

</div>
