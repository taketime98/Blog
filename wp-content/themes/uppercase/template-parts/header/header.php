<?php
/**
 * The template for displaying the header layout
 *
 * @package Uppercase
 */

$header_class = 'cs-header cs-header-primary';
if ( csco_is_header_social() ) {
	$header_class .= ' cs-header-social-links-enable';
}

?>

<header id="masthead" class="<?php echo esc_attr( $header_class ); ?>">
	<div class="cs-header__inner cs-header__inner-desktop">
		<div class="cs-header__col cs-col-left">
			<?php
				csco_component( 'header_logo' );
			?>
		</div>
		<div class="cs-header__col cs-col-right">
			<?php
				csco_component( 'header_social_links' );
				csco_component( 'header_search_toggle' );
				csco_component( 'header_menu_toggle' );
			?>
		</div>
	</div>
</header>
