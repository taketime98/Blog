<?php
/**
 * Widget Table of Contents
 *
 * @link       https://codesupply.co
 * @since      1.0.0
 *
 * @package    PowerKit
 * @subpackage PowerKit/widgets
 */

/**
 * Widget Table of Contents Class
 */
class Powerkit_Table_Of_Contents_Widget extends WP_Widget {

	/**
	 * Sets up a new widget instance.
	 */
	public function __construct() {

		$this->default_settings = apply_filters( 'powerkit_toc_widget_settings', array(
			'title'          => esc_html__( 'Table of Contents', 'powerkit' ),
			'depth'          => 2,
			'min_count'      => 4,
			'min_characters' => 1000,
			'btn_hide'       => false,
		) );

		$widget_details = array(
			'classname'   => 'powerkit_toc_widget',
			'description' => esc_html__( 'Add a table of contents to your sidebar.', 'powerkit' ),
		);
		parent::__construct( 'powerkit_toc_widget', esc_html__( 'Table of Contents', 'powerkit' ), $widget_details );
	}

	/**
	 * Outputs the content for the current widget instance.
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current widget instance.
	 */
	public function widget( $args, $instance ) {
		$params = array_merge( $this->default_settings, $instance );

		ob_start();

		powerkit_toc_list( $params );

		$toc_lis = ob_get_clean();

		if ( $toc_lis ) {
			// Before Widget.
			echo $args['before_widget']; // XSS OK.

			// Content Widget.
			echo $toc_lis; // XSS OK.

			// After Widget.
			echo $args['after_widget']; // XSS OK.
		}
	}

	/**
	 * Handles updating settings for the current widget instance.
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Settings to save or bool false to cancel saving.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $new_instance;

		// Display Button Hide.
		if ( ! isset( $instance['btn_hide'] ) ) {
			$instance['btn_hide'] = false;
		}

		return $instance;
	}

	/**
	 * Outputs the widget settings form.
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$params = array_merge( $this->default_settings, $instance );
		?>
			<!-- Title -->
			<p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'powerkit' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $params['title'] ); ?>" /></p>

			<!-- Depth of headings -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'depth' ) ); ?>"><?php esc_html_e( 'Depth of headings:', 'powerkit' ); ?></label>
				<input id="<?php echo esc_attr( $this->get_field_id( 'depth' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'depth' ) ); ?>" type="text" value="<?php echo absint( $params['depth'] ); ?>" size="3" />
			</p>

			<!-- Minimum number of headings in page content -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'min_count' ) ); ?>"><?php esc_html_e( 'Minimum number of headings in page content:', 'powerkit' ); ?></label>
				<input id="<?php echo esc_attr( $this->get_field_id( 'min_count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'min_count' ) ); ?>" type="text" value="<?php echo absint( $params['min_count'] ); ?>" size="3" />
			</p>

			<!-- Minimum number of characters of post content -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'min_characters' ) ); ?>"><?php esc_html_e( 'Minimum number of characters of post content:', 'powerkit' ); ?></label>
				<input id="<?php echo esc_attr( $this->get_field_id( 'min_characters' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'min_characters' ) ); ?>" type="text" value="<?php echo absint( $params['min_characters'] ); ?>" size="3" />
			</p>

			<!-- Display Button Hide -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'btn_hide' ) ); ?>"><?php esc_html_e( 'Display Button Hide:', 'powerkit' ); ?></label>
				<input id="<?php echo esc_attr( $this->get_field_id( 'btn_hide' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'btn_hide' ) ); ?>" type="checkbox" value="true" <?php checked( (bool) $params['btn_hide'] ); ?> />
			</p>
		<?php
	}
}

/**
 * Register Widget
 */
function powerkit_widget_init_table_of_contents() {
	register_widget( 'Powerkit_Table_Of_Contents_Widget' );
}
add_action( 'widgets_init', 'powerkit_widget_init_table_of_contents' );
