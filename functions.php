<?php

/**
 * Functions
 * @package AvatSweden
 */
function avatsweden_enqueue_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('avatsweden-style', get_template_directory_uri() . '/style.css', array(), $theme_version, 'all');

    wp_enqueue_style("mitttema-materialicons", '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined', array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700', false);
}
//wp hook
add_action('wp_enqueue_scripts', 'avatsweden_enqueue_scripts');


//wp http request
function get_custom_message()
{
    //custom http request timeout
    add_filter('http_request_timeout', 'custom_http_request_timeout');
    function custom_http_request_timeout($timeout)
    {
        $new_timeout = 20;
        return $new_timeout;
    }

    $api_url = 'https://az-message-creator.azurewebsites.net/api/Function1?code=Dd8gEFxImrQcopR7up61DystqTOVty3zgFIMhDHbBZPBAzFufDugnA==';
    $response = wp_remote_post($api_url);
    //print_r($response);

    if (is_wp_error($response)) {
        $error_message = $response->get_error_message();
        return "Something went wrong: $error_message";
    } else {
        $data = wp_remote_retrieve_body($response);
        $data = nl2br($data);
        $result = get_custom_message_array($data);
        return $result;
    }
}

function get_custom_message_array($message)
{
    $message_array = explode(";", $message);
    //nl2br($message_array);
    $message_array = array_map(function ($item) {
        $item_array = explode("+", $item);
        return array(
            "name" => $item_array[0],
            "grade" => $item_array[1],
            "description" => $item_array[2]
        );
    }, $message_array);
    return $message_array;
}
