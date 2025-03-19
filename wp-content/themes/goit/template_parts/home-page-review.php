<?php


// 🔹 Функції для роботи з ACF (Advanced Custom Fields)
// have_rows('testimonials') – Перевіряє, чи є група полів (повторювані рядки).
// the_row(); – Перемикає на наступний рядок у повторюваному полі.
// get_sub_field('testimonial_text') – Отримує значення підполя в повторюваному полі.
// get_field('testimonials') – Використовується для отримання значення звичайного поля (не підполя).


$review_title = get_field('review_title');
$review_description = get_field('review_description');
$review_comment = get_field('review_comment');
$review_image = get_field('review_image');
$review_author = get_field('review_author');
$review_info = get_field('review_info');
?>



<section class="review">
    <div class="container-review">

        <?php if ($review_title <> '') : ?>
            <h3 class="review_title"><?php echo $review_title ?></h3>
        <?php endif ?>

        <?php if ($review_description !== '') : ?>
            <p class="review_description">
                <?php echo $review_description ?> </php>
            </p>
        <?php endif ?>






        <div class="button-container">
            <button class="button-arrow button-next">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 8L21 12M21 12L17 16M21 12L3 12" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>



            <div class="comment-container">
                <?php if ($review_comment !== '') : ?>
                    <h5 class="review_comment"> <?php echo $review_comment ?></h5>
                <?php endif ?>



                <div class="author-container">
                    <?php if ($review_image <> '') : ?>
                        <img class="review_image" src=" <?php echo $review_image['url']; ?>" alt="<?php echo $review_image['alt'] ?>">

                    <?php endif; ?>
                    <?php if ($review_author !== '') : ?>
                        <h5 class="review_author"> <?php echo $review_author ?></h5>
                    <?php endif ?>


                    <div class="review_circle"> </div>


                    <?php if ($review_info !== '') : ?>
                        <h5 class="review_info"> <?php echo $review_info ?></h5>
                    <?php endif ?>
                </div>

            </div>
            <button class="button-arrow button-prev">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8L3 12M3 12L7 16M3 12L21 12" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

        </div>



    </div>
</section>