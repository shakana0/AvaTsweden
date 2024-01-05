<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                $post_title = get_the_title();

                if ($post_title === 'Oslo Analytic') {
        ?>
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_content(); ?></h2>
        <?php
                }
            endwhile;
        endif;
        ?>
    </header>