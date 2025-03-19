<?php get_header() ?>
<div id="page">

    <?php
    while (have_posts()):
        the_post(); ?>
        <?php the_title() ('<h1>', '</h1>') ?>
        <?php the_content() ?>

    <?php endwhile;

    ?>

</div><!-- #page -->
<?php get_footer() ?>