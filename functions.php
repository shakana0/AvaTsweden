<?php

/**
 * Functions
 * @package AvatSweden
 */
function avatsweden_enqueue_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('avatsweden-style', get_template_directory_uri() . '/style.css', array(), $theme_version, 'all');

    //where are thses being used?
    wp_enqueue_style('mitttema-googlefonts-header', 'https://fonts.googleapis.com/css2?family=Secular+One&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('mitttema-googlefonts-paragraph', 'https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Secular+One&display=swap', array(), '1.0', 'all');
    wp_enqueue_style("mitttema-materialicons", '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined', array(), '1.0', 'all');
}
//wp hook
add_action('wp_enqueue_scripts', 'avatsweden_enqueue_scripts');
