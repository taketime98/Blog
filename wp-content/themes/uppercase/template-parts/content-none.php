<?php
/**
 * Template part content none
 *
 * @package Uppercase
 */

?>

<div class="cs-entry__wrap">
	<div class="cs-entry__container">
		<div class="cs-entry__content-wrap">
			<div class="entry-content cs-content-not-found">
				<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'uppercase' ); ?></p>

				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>
