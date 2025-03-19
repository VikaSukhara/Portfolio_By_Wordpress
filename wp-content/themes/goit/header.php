<?php

/**
 * The header for our theme
 * @package goit
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>

<body class="body_style" <?php body_class(); ?>>
    <header>
        <div class="container">
            <a href='<?php echo home_url(); ?> ' class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header_menu', // Це реєстрація меню в functions.php:
                'menu_id' => 'header-menu', // Додає id="header-menu" до <ul>:
                'container' => 'nav', // Обгортка (або false, якщо не потрібно)  Обгортає меню у тег <nav>:
                'container_class' => 'header-nav', // Додає клас обгортці <nav>:
                'menu_class' => 'header-menu', // Додає клас для <ul>:
                'item-wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'

                //Кастомний шаблон <ul>, де:
                //%1$s = menu_id
                //%2$s = menu_class
                //%3$s = саме меню (<li>)
            ));
            ?>
        </div>
    </header>