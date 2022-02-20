<?php
/**
 * Plugin Name:       All-in-One WP Admin Notice
 * Plugin URI:        https://wordpress.org/plugins/all-in-one-wp-admin-notice
 * Description:       All-in-One WP Admin Notice plugin will show custom notice in WordPress Dashboard.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Monzur Alam
 * Author URI:        https://profiles.wordpress.org/monzuralam
 * Text Domain:       all-in-one-wp-admin-notice
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('AI1WPAN_URL',plugin_dir_url(__FILE__));

if(!function_exists('all_in_one_wp_admin_notice_assets')){
    function all_in_one_wp_admin_notice_assets(){
        wp_enqueue_script('ai1wp-admin-notice', AI1WPAN_URL . 'assets/js/main.js', array('jquery'), time(), true);
    }
    add_action('admin_enqueue_scripts','all_in_one_wp_admin_notice_assets');
}

if (!function_exists('all_in_one_wp_admin_notice')) {
    function all_in_one_wp_admin_notice(){
    ?>
        <div class="notice notice-success is-dismissible">
            <p>This is custom notice.</p>
        </div>
    <?php
    }
    add_action('admin_notices', 'all_in_one_wp_admin_notice');
}