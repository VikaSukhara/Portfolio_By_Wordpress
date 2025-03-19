<?php


add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks() {
    if (function_exists('acf_register_block_type')) {
        // Блок Hero
        acf_register_block_type(array(
            'name'            => 'hero',
            'title'           => __('Hero'),
            'description'     => __('Hero block'),
            'render_template' => get_template_directory() . '/blocks/home-page/hero.php',
            'category'        => 'practise-block',
            'icon'            => 'admin-generic',
            'enqueue_style'   => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords'        => array('hero', 'hero block'),
        ));

        // Блок Work Experience
        acf_register_block_type(array(
            'name'            => 'work_experience',
            'title'           => __('Work Experience'),
            'description'     => __('Work experience section'),
            'render_template' => get_template_directory() . '/blocks/experience-section/experience.php',
            'category'        => 'formatting',
            'icon'            => 'admin-users',
            'enqueue_style'   => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords'        => array('work', 'experience', 'career'),
        ));

// registration of review block
        acf_register_block_type(array(
            'name'            => 'review_block',
            'title'           => __('Review Block'),
            'description'     => __('A section for displaying customer reviews'),
            'render_template' => get_template_directory() . '/blocks/review-section/review.php',
            'category'        => 'widgets',
            'icon'            => 'admin-users',
            'enqueue_style'   => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords'        => array('review', 'testimonial', 'feedback'),
        ));

        acf_register_block_type(array(
            'name'            => 'cta_block',
            'title'           => __('CTA Block'),
            'description'     => __('A section for connection with clients'),
            'render_template' => get_template_directory() . '/blocks/cta-section/cta.php',
            'category'        => 'widgets',
            'icon'            => 'admin-users',
            'enqueue_style'   => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords'        => array('cta', 'connections', 'feedback'),
        ));
    }
}
