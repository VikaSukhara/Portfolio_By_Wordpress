<?php

//post-types

function register_post_types()
{
    register_post_type('project', array(
        'label' => 'Projects',
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'project',
            'add new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects Found',
            'not_found_in_trash' => 'No Projects Found in Trash'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'projects'),
        'supports' =>  array('title', 'editor', 'thumbnail', 'excerpt'),
    ));
}

add_action('init', 'register_post_types');
