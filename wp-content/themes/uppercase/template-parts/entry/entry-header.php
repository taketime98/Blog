<?php
/**
 * Template part entry header
 *
 * @package Uppercase
 */

?>

<header class="cs-header cs-header-secondary">
	<div class="cs-header__inner cs-header__inner-desktop">
		<?php if ( is_single() ) { ?>
			<div class="cs-header__col cs-col-left">
				<div class="cs-header__col-inner">
					<?php
						csco_breadcrumbs();
						csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false, true, 'post_meta' );
					?>
				</div>
			</div>
		<?php } ?>
		<div class="cs-header__col cs-col-right">
			<div class="cs-header__col-inner">
				<?php csco_component( 'topbar_scheme_toggle' ); ?>
			</div>
		</div>
	</div>
</header>
