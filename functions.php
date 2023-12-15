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


//wp http request
function get_custom_message($url)
{
    //endpoint url
    $api_url = 'https://az-message-creator.azurewebsites.net/api/Function1?code=Dd8gEFxImrQcopR7up61DystqTOVty3zgFIMhDHbBZPBAzFufDugnA==';
    // Request parameters - sample data for creating a new post
    $request_args = array(
        'body' => json_encode(array(
            'name' => $url,
        )),
        'headers' => array(
            'Content-Type' => 'application/json; charset=utf-8',
        ),
    );
    $response = wp_remote_post($api_url, $request_args);

    if (is_wp_error($response)) {
        // echo "Something went wrong!";
        $error_message = $response->get_error_message();
        return "Something went wrong: $error_message";
    } else {
        // echo "success";
        return wp_remote_retrieve_body($response);
    }
}
