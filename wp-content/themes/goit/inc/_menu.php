<?php

//registration menu

function register_menus() {
    register_nav_menus(array(
        'header_menu' => 'Header Menu', // ключ, за яким будемо викликати
    ));
}
add_action('after_setup_theme', 'register_menus');
