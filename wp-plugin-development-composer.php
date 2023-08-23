<?php
/*
Plugin Name: WP Plugin Development Using Composer
Description: This plugin enables to autoreload when files changed.
Version: 0.0.1
GitHub Plugin URI: https://github.com/garydubb/wordpress-plugin-with-composer
Author: Gary Dubb
*/

define('WP_PLUGIN_VERSION', '1.0.0');

require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');

// change SAMPLENAMESPACE wherever applicable
// Use the autoloaded class

function fmt_autoload_classes() {
    $hello = new SAMPLENAMESPACE\Hello();
    echo $hello->sayHello();
    $circle = new SAMPLENAMESPACE\Shapes\Circle();
    echo '<br>';
    echo 'Shape: ' . $circle->getShapeName();
}

add_action('init', 'fmt_autoload_classes');


