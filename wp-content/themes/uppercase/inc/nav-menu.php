<?php
/**
 * Add badge fields to menu item
 *
 * @package Uppercase
 */

if ( version_compare( get_bloginfo( 'version' ), '5.4', '<' ) ) {
	return;
}

/**
 * Add custom fields to menu item
 *
 * @param int      $item_id Menu item ID.
 * @param WP_Post  $item    Menu item data object.
 * @param int      $depth   Depth of menu item. Used for padding.
 * @param stdClass $args    An object of menu item arguments.
 * @param int      $id      Nav menu ID.
 */
function csco_nav_menu_item_custom_fields( $item_id ) {

	wp_nonce_field( 'csco_menu_meta_nonce', 'csco_menu_meta_nonce_name' );
	$badge_color  = get_post_meta( $item_id, '_csco_menu_badge_color', true );
	$badge_text   = get_post_meta( $item_id, '_csco_menu_badge_text', true );
	$multi_column = filter_var( get_post_meta( $item_id, '_csco_menu_multi_column', true ), FILTER_VALIDATE_BOOLEAN);

	$badge_colors = array(
		'primary'   => esc_html__( 'Primary', 'uppercase' ),
		'secondary' => esc_html__( 'Secondary', 'uppercase' ),
		'dark'      => esc_html__( 'Dark', 'uppercase' ),
		'success'   => esc_html__( 'Success', 'uppercase' ),
		'info'      => esc_html__( 'Info', 'uppercase' ),
		'warning'   => esc_html__( 'Warning', 'uppercase' ),
		'danger'    => esc_html__( 'Danger', 'uppercase' ),
	);

	?>
	<p class="description description-thin">
		<label for="edit-menu-item-badge-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Badge Style', 'uppercase' ); ?></label>
		<select class="widefat" name="csco_menu_badge_color[<?php echo esc_attr( $item_id ); ?>]" id="edit-menu-item-badge-<?php echo esc_attr( $item_id ); ?>">
			<?php
			foreach ( $badge_colors as $value => $label ) {
				?>
				<option value="<?php echo esc_attr( $value ); ?>" class="pk-badge-<?php echo esc_attr( $value ); ?>" <?php selected( $badge_color, 'primary' ); ?>><?php echo esc_html( $label ); ?></option>
				<?php
			}
			?>
		</select>
	</p>
	<p class="field-badge-text description description-thin">
		<label for="edit-menu-item-badge-text-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Badge Text', 'uppercase' ); ?><br>
			<input type="text" class="widefat edit-menu-item-badge-text" name="csco_menu_badge_text[<?php echo esc_attr( $item_id ); ?>]" value="<?php echo esc_attr( $badge_text ); ?>" id="edit-menu-item-badge-text-<?php echo esc_attr( $item_id ); ?>">
		</label>
	</p>
	<p class="field-multi-column description description-wide">
		<label for="edit-menu-item-multi-column-<?php echo esc_attr( $item_id ); ?>">
			<input type="checkbox" value="true" name="csco_menu_multi_column[<?php echo esc_attr( $item_id ); ?>]" id="edit-menu-item-multi-column-<?php echo esc_attr( $item_id ); ?>" <?php checked( $multi_column, true ); ?>>
			<?php esc_html_e( 'Enable multi-column menu', 'uppercase' ); ?>
		</label>
	</p>
	<?php
}
add_action( 'wp_nav_menu_item_custom_fields', 'csco_nav_menu_item_custom_fields' );

/**
 * Save the menu item meta
 *
 * @param int $menu_id menu id.
 * @param int $menu_item_db_id menu item db id.
 */
function csco_update_nav_menu_item( $menu_id, $menu_item_db_id ) {

	// Check ajax.
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return;
	}

	// Security.
	check_admin_referer( 'csco_menu_meta_nonce', 'csco_menu_meta_nonce_name' );

	// Save badge color.
	if ( isset( $_POST['csco_menu_badge_color'][ $menu_item_db_id ] ) ) {
		$sanitized_data = sanitize_text_field( $_POST['csco_menu_badge_color'][ $menu_item_db_id ] );
		update_post_meta( $menu_item_db_id, '_csco_menu_badge_color', $sanitized_data );
	} else {
		delete_post_meta( $menu_item_db_id, '_csco_menu_badge_color' );
	}

	// Save badge text.
	if ( isset( $_POST['csco_menu_badge_text'][ $menu_item_db_id ] ) ) {
		$sanitized_data = sanitize_text_field( $_POST['csco_menu_badge_text'][ $menu_item_db_id ] );
		update_post_meta( $menu_item_db_id, '_csco_menu_badge_text', $sanitized_data );
	} else {
		delete_post_meta( $menu_item_db_id, '_csco_menu_badge_text' );
	}

	// Save badge text.
	if ( isset( $_POST['csco_menu_multi_column'][ $menu_item_db_id ] ) ) {
		$sanitized_data = sanitize_text_field( $_POST['csco_menu_multi_column'][ $menu_item_db_id ] );
		update_post_meta( $menu_item_db_id, '_csco_menu_multi_column', $sanitized_data );
	} else {
		delete_post_meta( $menu_item_db_id, '_csco_menu_multi_column' );
	}
}
add_action( 'wp_update_nav_menu_item', 'csco_update_nav_menu_item', 10, 2 );

/**
 * Displays text on the front-end.
 *
 * @param string  $title The menu item's title.
 * @param WP_Post $item The current menu item.
 * @return string
 */
function csco_custom_menu_title( $title, $item ) {

	// Return if wp version is less than 5.4.
	if ( version_compare( get_bloginfo( 'version' ), '5.4', '<' ) ) {
		return $title;
	}

	// Add badge code after title text.
	if ( is_object( $item ) && isset( $item->ID ) ) {

		$badge_color = get_post_meta( $item->ID, '_csco_menu_badge_color', true );
		$badge_text  = get_post_meta( $item->ID, '_csco_menu_badge_text', true );

		if ( ! empty( $badge_text ) ) {
			$badge_class = $badge_color ? $badge_color : 'primary';
			$title      .= ' <span class="pk-badge pk-badge-' . esc_attr( $badge_class ) . '">' . esc_html( $badge_text ) . '</span>';
		}
	}
	return $title;
}
add_filter( 'nav_menu_item_title', 'csco_custom_menu_title', 8, 2 );

/**
 * Displays text on the front-end.
 *
 * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
 * @param WP_Post  $item    The current menu item.
 * @param stdClass $args    An object of wp_nav_menu() arguments.
 * @param int      $depth   Depth of menu item. Used for padding.
 */
function csco_nav_menu_css_class( $classes, $item ) {
	$multi_column = get_post_meta( $item->ID, '_csco_menu_multi_column', true );
	if ( $multi_column ) {
		$classes[] = 'menu-item-multi-column';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'csco_nav_menu_css_class', 10, 2 );
