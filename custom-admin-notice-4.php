<?php
/**
 * Plugin Name: Custom admin notice
 * @package WordPress
 * Plugin URI: https://myfirstsite.local/plugins/
 * Description: Create a plugin with admin settings tab where admin can create custom notices
 * Version: 1.0.0
 * Author: shakoor
 * License: GPL v2 or later
 * Text Domain: custom-notice
 */

if(!defined('ABSPATH')){
    exit;
}

if(!defined('PLUGIN_DIR_PATH_CUSTOM_NOTICE')){
    define('PLUGIN_DIR_PATH_CUSTOM_NOTICE', plugin_dir_path( __FILE__ ));
}

if(!defined('PLUGIN_DIR_URL_CUSTOM_NOTICE')){
    define('PLUGIN_DIR_URL_CUSTOM_NOTICE', plugin_dir_url( __FILE__ ));
}

require_once PLUGIN_DIR_PATH_CUSTOM_NOTICE.'/inc/admin-menu.php';
require_once PLUGIN_DIR_PATH_CUSTOM_NOTICE.'/inc/admin-menu-page.php';
require_once PLUGIN_DIR_PATH_CUSTOM_NOTICE.'/inc/settings.php';
require_once PLUGIN_DIR_PATH_CUSTOM_NOTICE.'/inc/load-custom-notice.php';