<?php

use PluginWPClass\ConfigLoader;

$classString = 'class/';
$modelString = 'model/';

$classFiles = array_diff(scandir(plugin_dir_path(__FILE__) . $classString), array('.', '..'));
$objFiles = array_diff(scandir(plugin_dir_path(__FILE__) . $modelString), array('.', '..'));

foreach ($objFiles as $singleObj) {
    include plugin_dir_path(__FILE__) . $modelString . $singleObj;
}
foreach ($classFiles as $singleClass) {
    $classParts = explode('.', $singleClass);
    if ($classParts[1] === 'class') {
        include plugin_dir_path(__FILE__) . $classString . $singleClass;
    }
}

ConfigLoader::loadConfig(plugin_dir_path(__FILE__) . "config/");