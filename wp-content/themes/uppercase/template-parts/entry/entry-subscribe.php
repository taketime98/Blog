<?php
/**
 * The template part for displaying post subscribe section.
 *
 * @package Uppercase
 */

// Subscription.
$subscription_form = get_theme_mod( 'post_subscribe', true );

if ( shortcode_exists( 'powerkit_subscription_form' ) && $subscription_form ) {
	$subscribe_title = get_theme_mod( 'post_subscribe_title', esc_html__( 'Sign Up for Our Newsletters', 'uppercase' ) );
	$subscribe_text  = get_theme_mod( 'post_subscribe_text', esc_html__( 'Get notified of the best deals on our WordPress themes.', 'uppercase' ) );
	$subscribe_name  = get_theme_mod( 'post_subscribe_name', false );

	do_action( 'csco_post_subscribe_before' );
	?>
		<div class="cs-entry__subscribe">
			<div class="cs-site-subscribe__item">
				<div class="cs-site-subscribe__form">
					<?php if ( $subscribe_title || $subscribe_text ) { ?>
						<div class="cs-site-subscribe__info">
							<?php if ( $subscribe_title ) { ?>
								<h5 class="cs-site-subscribe__title cs-section-heading"><?php echo wp_kses_post( $subscribe_title ); ?></h5>
							<?php } ?>

							<?php if ( $subscribe_text ) { ?>
								<span class="cs-site-subscribe__info-text"><?php echo wp_kses_post( $subscribe_text ); ?></span>
							<?php } ?>
						</div>
					<?php } ?>

					<?php echo do_shortcode( sprintf( '[powerkit_subscription_form display_name="%1$s" %2$s="" text=""]', $subscribe_name, 'title' ) ); ?>
				</div>
			</div>
		</div>

	<?php
	do_action( 'csco_post_subscribe_after' );
}
