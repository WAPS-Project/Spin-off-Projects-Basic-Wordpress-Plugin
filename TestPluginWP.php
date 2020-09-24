<?php

/*
Plugin Name: WAPS based test plugin
Plugin URI: https://gitlab.com/waps
Description: A brief description of the Plugin.
Version: 1.0.0
Author: Jonas Pfalzgraf
Author URI: https://josunlp.de
License: MIT
*/

include(plugin_dir_path(__FILE__) . 'core.loader.php');

if (!defined('ABSPATH')) {
    exit;
}

function main() {

    wp_register_style('custom_css', plugins_url( '/content/dist/css/style.css', __FILE__));
    wp_enqueue_style('custom_css');

    wp_enqueue_script( 'custom_js', plugins_url( '/content/dist/js/index.js', __FILE__ ));
    $result = '<div id="app">Your browser does not support JavaScript!</div>';
    
    return $result;
}

add_shortcode(PLUGIN_NAME, 'main');