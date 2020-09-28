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

use PluginWPClass\AdminPage;
use PluginWPClass\ConfigLoader;

include(plugin_dir_path(__FILE__) . 'core.loader.php');

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'test_plugin_setup_menu');

function test_plugin_setup_menu()
{
	add_menu_page('WAPS Plugin Page', 'WAPS Plugin', 'manage_options', 'waps-plugin', 'waps_init');
}

function waps_init()
{
	$config = ConfigLoader::returnConfig(plugin_dir_path(__FILE__) . "config/wapsRuntime.config.json");
	AdminPage::runPage($config, plugin_dir_path(__FILE__) . "config/wapsRuntime.config.json");
}

function waps_scripts() {
	wp_register_style('custom_css', plugins_url('/content/dist/css/style.css', __FILE__));
	wp_enqueue_style('custom_css');

	wp_enqueue_script('custom_js', plugins_url('/content/dist/js/index.js', __FILE__), array(), false, true);
}

function main() {
	waps_scripts();
    $result = '<div id="app">Your browser does not support JavaScript!</div>';

    return $result;
}

add_action('admin_enqueue_scripts', 'waps_scripts');

add_shortcode(PLUGIN_NAME, 'main');
