<?php
/**
 * Plugin Name: Numeric List of Posts Widget.
 * Plugin URI: https://github.com/younes-dro/numeric-list-posts-archive-widget
 * Description: A WordPress widget plugin to display a numeric list of posts in a sidebar widget area.
 * Version: 1.0
 * Author: Younes DRO
 * Author URI: https://github.com/younes-dro/
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: nlp-widget
 * Domain Path: /languages
 */

/*
	Copyright 2019 Younes DRO (email : younesdro at gmail.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_admin() ) {
	return;
}

define( 'NLP_BASENAME', plugin_basename( __FILE__ ) );
define( 'NLP_ROOT', plugin_dir_path( __FILE__ ) );

require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/inc/class-numeric-list-posts-settings.php';
require_once __DIR__ . '/inc/class-numeric-list-posts-views.php';
require_once __DIR__ . '/inc/class-numeric-list-posts.php';

// Create the widget
add_action( 'widgets_init', 'numeric_list_posts' );
function numeric_list_posts() {
	register_widget( 'Numeric_List_Posts' );
}
