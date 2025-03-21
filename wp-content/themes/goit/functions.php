<?php
if (!defined('ABSPATH')) exit;

// Define constants
if (!defined('_VERSION')) {
	define('_VERSION', '1.0.0');
}

// Include styles and scripts
require get_template_directory() . '/inc/_scripts.php';

// Post types
require get_template_directory() . '/inc/_post-types.php';

// Registration menu
require get_template_directory() . '/inc/_menu.php';


//ACF
require get_template_directory() . '/inc/_acf.php';

//Register blocks
require get_template_directory() . '/inc/_blocks.php';