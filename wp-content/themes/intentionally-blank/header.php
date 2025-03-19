<?php

/**
 * The base (and only) template
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>