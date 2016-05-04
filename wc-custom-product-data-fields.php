<?php
/*
 * Plugin Name: WooCommerce Custom Product Data Fields
 * Plugin URI: http://risbl.co/wp/woocommerce-custom-product-data-fields-plugin/
 * Description: Simple framework which will help you to build extra product data fields, e.g. secondary product title, vendor info, custom message for individual product, etc.
 * Version: 1.2.2
 * Author: Kharis Sulistiyono
 * Author URI: http://kharisulistiyo.github.io
 * Requires at least: 3.1
 * Tested up to: 4.4.1
 *
 * Text Domain: wc_cpdf
 * Domain Path: /lang/
 *
 * Copyright: @ 2016 Kharis Sulistiyono.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if(!defined('ABSPATH')) exit; // Exit if accessed directly

if (
    is_admin() &&
    in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) &&
    ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX )) {
  require_once dirname(__FILE__) . '/class-wc-product-data-fields.php';
  add_action('after_setup_theme', array('WC_Product_Data_Fields', 'get_instance'));
}
