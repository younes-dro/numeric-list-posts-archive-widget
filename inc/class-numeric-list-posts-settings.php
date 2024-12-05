<?php

/**
 * Class Numeric_List_Posts_Settings
 *
 * Handles localization, styles, and JavaScript for the Numeric List Posts widget.
 */
class Numeric_List_Posts_Settings {

	/**
	 * Enqueues admin styles for the widget settings page.
	 *
	 * Adds a CSS file for styling the widget admin interface on the `widgets.php` page.
	 */
	static function admin_style() {
		add_action(
			'admin_enqueue_scripts',
			function ( $hook ) {
				if ( $hook == 'widgets.php' ) {
					wp_enqueue_style( 'nlp-admin', plugins_url( 'numeric-list-posts-widget/css/admin.css' ) );
				}
			}
		);
	}

	/**
	 * Enqueues front-end styles for the widget.
	 *
	 * Adds a CSS file for styling the widget when it is displayed on the front end.
	 */
	static function widget_style() {
		add_action(
			'wp_enqueue_scripts',
			function () {
				wp_enqueue_style( 'nlp-widget', plugins_url( 'numeric-list-posts-widget/css/widget.css' ) );
			}
		);
	}

	/**
	 * Enqueues admin JavaScript for the widget settings page.
	 *
	 * Adds a JavaScript file for enhancing the widget admin interface on the `widgets.php` page.
	 */
	static function admin_js() {
		add_action(
			'admin_enqueue_scripts',
			function ( $hook ) {
				if ( $hook == 'widgets.php' ) {
					wp_enqueue_script( 'nlp-admin', plugins_url( 'numeric-list-posts-widget/js/admin.js' ) );
				}
			}
		);
	}

	/**
	 * Enqueues front-end JavaScript for the widget.
	 *
	 * Adds a JavaScript file for enhancing the widget functionality on the front end.
	 */
	static function widget_js() {
		add_action(
			'wp_enqueue_scripts',
			function () {
				wp_enqueue_script( 'nlp-widget', plugins_url( 'numeric-list-posts-widget/js/widget.js' ) );
			}
		);
	}
}
