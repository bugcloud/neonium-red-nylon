<?php
function remove_rednylon_load_scripts() {
	remove_action('init', 'rednylon_load_scripts');
}

function neonium_rednylon_load_scripts() {
	if ( !is_admin() ) {
		wp_register_script('rednylon_custom_script', get_stylesheet_directory_uri() . '/js/smoothScroll.js', array('jquery') );
		wp_enqueue_script('rednylon_custom_script');
		wp_register_script('rednylon_custom_script2', get_template_directory_uri() . '/js/custom.js', array('jquery') );
		wp_enqueue_script('rednylon_custom_script2');
	}
}

add_action('init', 'remove_rednylon_load_scripts');
add_action('init', 'neonium_rednylon_load_scripts');

function is_first_post() {
	global $wp_query;
	return ($wp_query->current_post === 0);
}

function is_last_post() {
	global $wp_query;
	return ($wp_query->current_post === 0);
}

function is_odd_post() {
	global $wp_query;
	return ((($wp_query->current_post+1) % 2) === 1);
}

function is_even_post() {
	global $wp_query;
	return ((($wp_query->current_post+1) % 2) === 0);
}
?>
