<?php

/*
Plugin Name: Test Plugin WP
Plugin URI: https://fearnixx.de
Description: A brief description of the Plugin.
Version: 1.0.0
Author: JosunLP
Author URI: https://josunlp.de
License: MIT
*/


use PluginWPClass\ConfigLoader;
use PluginWPClass\ScriptLoader;

include( plugin_dir_path( __FILE__ ) . 'class/ConfigLoader.class.php');
include( plugin_dir_path( __FILE__ ) . 'class/ScriptLoader.class.php');

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