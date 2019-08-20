<?php

/*
 * 
 */

if( ! function_exists( 'add_action' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}
function numeric_list_posts_action_links( $links ) {
    $links = array_merge(array(
        '<a href="' . esc_url(admin_url('/options-general.php')) . '">' . __('Settings', 'textdomain') . '</a>'
            ), $links);

    return $links;
}

add_action('plugin_action_links_' . NLP_BASENAME, 'numeric_list_posts_action_links');
