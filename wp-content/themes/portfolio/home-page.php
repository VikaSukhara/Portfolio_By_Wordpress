<?php

/*
Template Name: Home Page
Template Name Type: page
*/

/*
<?php require get_template_directory() . '/assets/html/example.html'?>
*/

// це основна сторінка - http://portfolio.local/


get_header();
if (have_posts()):
    while (have_posts()):
        the_post();

        the_content();
    endwhile;

endif;


$post_projects = get_posts(array(
    'post_type' => 'project',
    'post_per_page' => 3,
    'orderby' => 'id',
    'order' => 'DESC'
));

foreach ($post_projects as $post):
    setup_postdata($post);
?>
    <div class="column-post">
        <h1><?php the_title(); ?></h1>;
        <h4>Project singe in home page</h4>
        <?php the_content(); ?>
    </div>

<?php
endforeach;



get_footer();



/*
 get_header() 


// <h1>Home Page</h1>
// <?php the_content() ?>


// <?php get_template_part('template_parts/example') ?>
// <?php get_footer() ?>
*/
