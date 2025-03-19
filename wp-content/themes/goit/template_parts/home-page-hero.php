<?php
$show = get_field('show_hero');
if (!is_admin()) {
    if (!$show) return;
}
$hero_title = get_field('hero_title') ?? 'Title here...';
$hero_description = get_field('hero_description') ?? 'Description here...';
$hero_buttons = get_field('hero_buttons');
$first_cta_button = $hero_buttons['lets_talk'] ?? '';
$second_cta_button = $hero_buttons['portfolio'] ?? '';
$hero_image = get_field('hero_image');
?>

<section class="hero">
    <div class="container_header">
        <div class="container_parts">
            <?php if ($hero_title <> '') : ?>
                <h1 class="hero_header"><?php echo $hero_title ?></h1>
            <?php endif ?>

            <?php if ($hero_description <> '') : ?>
                <p class="hero_desc"><?php echo $hero_description ?></p>
            <?php endif ?>

            <?php if ($first_cta_button <> '') : ?>
                <a href="<?php echo $first_cta_button['url']; ?>" class="header_first_button btn">
                    <?php echo $first_cta_button['title']; ?>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 8H8.01M12 8H12.01M16 8H16.01M9 14H5C3.89543 14 3 13.1046 3 12V4C3 2.89543 3.89543 2 5 2H19C20.1046 2 21 2.89543 21 4V12C21 13.1046 20.1046 14 19 14H14L9 19V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            <?php endif ?>

            <?php if ($second_cta_button <> '') : ?>
                <a href="<?php echo $second_cta_button['url']; ?>" class="header_second_button btn">
                    <?php echo $second_cta_button['title']; ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44771 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z" fill="#6B7280" />
                    </svg>
                </a>
            <?php endif ?>
        </div>
        <div class="container_parts">

            <?php if ($hero_image <> '') : ?>
                <img class="hero_img" src=" <?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt'] ?>">
                <?php else:
                if (is_admin()) : ?>

                    <svg width="374" height="421" viewBox="0 0 374 421" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M169.443 5.57481C180.272 -0.677336 193.614 -0.677327 204.443 5.57482L355.867 92.9998C366.696 99.2519 373.367 110.806 373.367 123.311V298.161C373.367 310.665 366.696 322.219 355.867 328.471L204.443 415.896C193.614 422.149 180.272 422.149 169.443 415.896L18.0183 328.471C7.18929 322.219 0.518341 310.665 0.518341 298.161V123.311C0.518341 110.806 7.1893 99.2519 18.0183 92.9998L169.443 5.57481Z" fill="#D9D9D9" />
                    </svg>
                <?php endif ?>
            <?php endif; ?>
        </div>
    </div>
</section>