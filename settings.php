<?php

// Ensure this file is accessed only through WordPress.
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

/**
 * Adds a "Settings" link to the plugin's action links on the Plugins page.
 *
 * @param array $links An array of existing action links for the plugin.
 *
 * @return array Modified array of action links, including the "Settings" link.
 */
function numeric_list_posts_action_links( $links ) {
	$links = array_merge(
		array(
			'<a href="' . esc_url( admin_url( '/options-general.php' ) ) . '">' . __( 'Settings', 'nlp-widget' ) . '</a>',
		),
		$links
	);

	return $links;
}

// Hook into the plugin action links filter for the specific plugin.
add_action( 'plugin_action_links_' . NLP_BASENAME, 'numeric_list_posts_action_links' );
