<?php

/**
 * Class Numeric_List_Posts_Views
 *
 * Handles the rendering of the admin view for the Numeric List Posts Widget.
 */
class Numeric_List_Posts_Views {

	/**
	 * @var WP_Widget The instance of the widget.
	 */
	public $widget;

	/**
	 * @var array The instance of the form settings.
	 */
	public $instance;

	/**
	 * @var string The HTML output for the widget.
	 */
	private $html;

	/**
	 * Constructor for the Numeric_List_Posts_Views class.
	 *
	 * @param WP_Widget $WIDGET   The instance of the widget.
	 * @param array     $instance The current settings for the widget.
	 */
	function __construct( $WIDGET, $instance ) {
		$this->widget   = $WIDGET;
		$this->instance = $instance;
	}

	/**
	 * Outputs the widget admin view.
	 *
	 * Calls the private method `_widget_admin_view` to build and display the HTML.
	 */
	function widget_admin_view() {
		echo $this->_widget_admin_view();
	}

	/**
	 * Builds the HTML output for the widget admin view.
	 *
	 * @return string The HTML output for the widget admin view.
	 */
	private function _widget_admin_view() {
		$this->html  = '<div class="nlp-widget">';
		$this->html .= '<label>' . esc_html__( 'Name', 'nlp-widget' ) . '</label>';
		$this->html .= '<input type="text" '
					. 'class="widefat"'
					. 'id="' . $this->widget->get_field_id( 'name' ) . '"'
					. ' name="' . $this->widget->get_field_name( 'name' ) . '"'
					. ' value="' . esc_attr( $this->instance['name'] ) . '" />';
		$this->html .= '</div>';

		return $this->html;
	}
}
