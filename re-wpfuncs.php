<?php
/*
Plugin Name: Useful Functions for WordPress - by Renegade Empire
Description: Frequently used snippets
*/

/* =====================================================
	Remove login bar for all users except admin
===================================================== */

// Source: http://www.wpbeginner.com/wp-tutorials/how-to-disable-wordpress-admin-bar-for-all-users-except-administrators/

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}
?>