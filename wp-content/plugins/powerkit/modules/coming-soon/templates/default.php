<?php
/**
 * Coming Soon default template
 *
 * @var     $object  - Page object.
 * @var     $title   - The title.
 * @var     $content - The content.
 *
 * @package PowerKit
 */

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>
</head>
<body>
	<div class="pk-coming-soon-page pk-coming-soon-default">
		<div class="pk-coming-soon-container">
			<?php if ( $object && has_post_thumbnail( $object ) ) { ?>
				<div class="pk-coming-soon-image">
					<?php echo get_the_post_thumbnail( $object, 'large', array( 'class' => 'pk-lazyload-disabled' ) ); ?>
				</div>
			<?php } ?>
			<div class="pk-coming-soon-content">
				<div class="entry-content">
					<?php
						echo apply_filters( 'the_content', $content ); // XSS.
					?>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
