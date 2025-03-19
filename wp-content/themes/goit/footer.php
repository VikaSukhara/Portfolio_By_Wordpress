<?php

/**
 * The footer for our theme
 * @package goit
 */
?>
</div>
<!-- END BODY -->

<?php wp_footer(); ?>
<?php

$footer_paragraph = get_field('footer_paragraph');
$social_links = get_field('social_links');
?>


<footer class="footer" id="contacts">
    <div class="footer-container">
        <?php if ($footer_paragraph) : ?>
            <p class="copyright"> <?php echo $footer_paragraph; ?></p>

        <?php endif; ?>

        <ul>

            <?php
            if ($social_links && is_array($social_links)) {
                echo '<div class="social-links">';

                foreach ($social_links as $key => $value) {
                    if (strpos($key, '_url') !== false) {
                        $icon_key = str_replace('_url', '_icon', $key);

                        // Перевіряємо, чи існує іконка та URL
                        if (!empty($value) && !empty($social_links[$icon_key]['url'])) {
                            echo '<a href="' . esc_url($value) . '" target="_blank">';
                            echo '<img src="' . esc_url($social_links[$icon_key]['url']) . '" alt="social icon" width="24" height="24">';
                            echo '</a>';
                        }
                    }
                }
                echo '</div>';
            } else {
                echo 'Немає соціальних посилань';
            }
            ?>

        </ul>

    </div>
</footer>

</body>

</html>