<?php
//scripts ans styles
add_action('wp_enqueue_scripts','portfolio_script');
function portfolio_script()
{
    wp_enqueue_style(
        'portfolio_style',
        get_template_directory_uri() . '/assets/scss/app.css',
        array(),
        _VERSION
    );
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'portfolio_script',
        get_template_directory_uri() . '/assets/js/app.js',
        array(),
        _VERSION,
        true
    );
}
