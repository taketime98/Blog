<?php
/**
 * The template part for displaying header inner nextpost.
 *
 * @package Uppercase
 */

?>

<div class="cs-entry__header cs-entry__header-standard">

	<div class="cs-entry__header-inner">

		<div class="cs-entry__header-info">

			<div class="cs-entry__header-info-inner">

				<div class="cs-entry__header-description cs-entry__title-current cs-active-prev-next">
					<?php
						csco_get_post_meta( 'category', false, true, 'post_meta' );
						the_title( '<h1 class="cs-entry__title"><span>', '</span></h1>' );
					?>
				</div>

				<?php do_action( 'csco_entry_header_info_end' ); ?>

			</div>

		</div>

	</div>

	<?php do_action( 'csco_header_inner_end' ); ?>

</div>
