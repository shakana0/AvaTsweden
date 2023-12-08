<footer>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            $post_title = get_the_title();

            if ($post_title === 'Footer') {
    ?>
                <div class="container">
                    <p><?php the_content(); ?></p>
                </div>
    <?php
            }
        endwhile;
    endif;
    ?>
</footer>

<?php wp_footer(); ?>

</body>

</html>