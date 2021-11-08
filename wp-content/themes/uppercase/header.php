<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "cs-site" div.
 *
 * @package Uppercase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php csco_site_scheme(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<?php do_action( 'csco_site_before' ); ?>

<div id="page" class="cs-site">

	<?php do_action( 'csco_site_start' ); ?>

	<div class="cs-site-inner">

		<main id="main" class="cs-site-primary">

			<?php do_action( 'csco_site_content_before' ); ?>

			<div <?php csco_site_content_class(); ?>>

				<?php do_action( 'csco_main_content_before' ); ?>

				<div id="content" class="cs-main-content">

					<?php do_action( 'csco_main_content_start' ); ?>

					<?php get_sidebar(); ?>

					<div id="primary" class="cs-content-area">

						<?php do_action( 'csco_content_inner_before' ); ?>

						<div class="cs-content-inner">

							<?php csco_entry_header(); ?>

							<div class="cs-content-item">
