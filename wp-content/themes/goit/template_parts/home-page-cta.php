<?php

$cta_title = get_field('cta_title');
$cta_description = get_field('cta_description');
$cta_button = get_field('cta_button');
?>

<section id="review">
    <div class="cta-container">

        <?php if ($cta_title <> '') : ?>
            <h3 class="cta-title">
                <?php echo $cta_title ?></h3>
        <?php endif ?>

        <?php if ($cta_description <> '') : ?>
            <p class="cta-description">
                <?php echo $cta_description ?></p>
        <?php endif ?>


        <?php if ($cta_button !== '') : ?>
            <a href="<?php echo $cta_button['url']; ?>" class="cta-button">
                <?php echo $cta_button['title']; ?>
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 7H6.01M10 7H10.01M14 7H14.01M7 13H3C1.89543 13 1 12.1046 1 11V3C1 1.89543 1.89543 1 3 1H17C18.1046 1 19 1.89543 19 3V11C19 12.1046 18.1046 13 17 13H12L7 18V13Z" stroke="#312E81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        <?php endif ?>
    </div>
</section>