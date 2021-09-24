<?php

/*
Plugin name: Testing
Description: Whatever
Version: 1.0
Author: Martin
Author URI: https://www.alegherix.com
*/

if (!defined("ABSPATH")) exit;

class Testing
{
    function __construct()
    {
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets()
    {
        wp_enqueue_script('newBlockType', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks'));
    }
}

$test = new Testing();
