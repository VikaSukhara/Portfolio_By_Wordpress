<?php

	add_action('wp_enqueue_scripts', 'enqueue_scripts');
	
	function enqueue_scripts() {
		wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/main.css');
		wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js');
	};

add_filter('the_content', "add_custom_content", 10, 1);

function add_custom_content($content) {

	$content .= '<p style="font-size:70px; color:red">Custom content</p>';
	return $content;
};