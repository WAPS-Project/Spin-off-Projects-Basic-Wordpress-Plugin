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


use PluginWPClass\ConfigLoader;
use PluginWPClass\ScriptLoader;

if (!defined('ABSPATH')) {
    exit;
}

include( plugin_dir_path( __FILE__ ) . 'class/ConfigLoader.class.php');
include( plugin_dir_path( __FILE__ ) . 'class/ScriptLoader.class.php');
include( plugin_dir_path( __FILE__ ) . 'class/JsonHandler.class.php');

ConfigLoader::loadConfig(plugin_dir_path( __FILE__ ) . "config/");

function headScriptLoading() {
    ScriptLoader::headScripts(plugin_dir_path( __FILE__ ));
}
add_action( 'wp_head', 'headScriptLoading' );

function footerScriptLoading() {
    ScriptLoader::footerScripts(plugin_dir_path( __FILE__ ));
}
add_action( 'wp_footer', 'footerScriptLoading' );

function main() {
    wp_enqueue_script( 'custom_js', plugins_url( '/content/dist/js/index.js', __FILE__ ));
    $result = 'This is an Example Plugin';
    return $result;
}

add_shortcode(PLUGIN_NAME, 'main');