<?php

/**
 * Class Numeric_List_Posts
 *
 * A WordPress widget for displaying a numeric list of posts archive.
 * Extends the WP_Widget class.
 */
class Numeric_List_Posts extends WP_Widget {

	/**
	 * Constructor for the Numeric_List_Posts widget.
	 *
	 * Sets up the widget name, description, and loads necessary styles and scripts.
	 */
	function __construct() {

		add_action( 'init', array( $this, 'widget_textdomain' ) );

		parent::__construct(
			'numeric-lis-posts',
			__( 'Numeric Lists Posts', 'nlp-widget' ),
			array(
				'classname'   => 'numeric-lis-posts',
				'description' => __( 'List your posts archive by number.', 'nlp-widget' ),
			)
		);

		// Load styles and scripts
		Numeric_List_Posts_Settings::admin_style();
		Numeric_List_Posts_Settings::widget_style();
		Numeric_List_Posts_Settings::admin_js();
		Numeric_List_Posts_Settings::widget_js();
	}

	/**
	 * Outputs the settings form in the WordPress admin for this widget.
	 *
	 * @param array $instance Current widget settings.
	 */
	function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array( 'name' => '' )
		);

		$NLP_view = new Numeric_List_Posts_Views( $this, $instance );
		$NLP_view->widget_admin_view();
	}

	/**
	 * Outputs the widget's content on the front end.
	 *
	 * @param array $args Display arguments including 'before_title' and 'after_title'.
	 * @param array $instance Current widget settings.
	 */
	function widget( $args, $instance ) {
		// TODO: Implement the widget output logic
	}

	/**
	 * Handles updating the widget settings in the admin.
	 *
	 * @param array $new_instance New widget settings.
	 * @param array $old_instance Previous widget settings.
	 *
	 * @return array Updated widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$old_instance['name'] = $new_instance['name'];
		return $old_instance;
	}

	/**
	 * Loads the plugin text domain for translation.
	 */
	function widget_textdomain() {
		load_plugin_textdomain( 'nlp-widget', false, NLP_ROOT . 'languages/' );
	}
}
