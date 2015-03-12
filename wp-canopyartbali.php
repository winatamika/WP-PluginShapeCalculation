<?php

/*
  Plugin Name: CanopyArtBali
  Plugin URI: http://canopyartbali.com/
  Description: Shape Calculation for CanopyArtBali
  Author: me
  Author URI: http://mickrabbit.com/
  Version: 1.0.0
 */

/*
 * USAGE, add shortcode [canopyshapecalculation] in page or post
 * 
 */

if (!defined('CAB_PLUGIN_BASENAME'))
    define('CAB_PLUGIN_BASENAME', plugin_basename(__FILE__));

if (!defined('CAB_PLUGIN_NAME'))
    define('CAB_PLUGIN_NAME', trim(dirname(CAB_PLUGIN_BASENAME), '/'));

if (!defined('CAB_PLUGIN_DIR'))
    define('CAB_PLUGIN_DIR', untrailingslashit(dirname(__FILE__)));

if (!defined('CAB_PLUGIN_URL'))
    define('CAB_PLUGIN_URL', untrailingslashit(plugins_url('', __FILE__)));

if (is_admin()) {
    add_action('admin_menu', 'cab_register_admin_menu', 9);
} else {
    add_shortcode('canopyshapecalculation', 'cab_shapecalculation_shortcode');
}

register_activation_hook(__FILE__, 'cab_shapecalculation_activate');
register_deactivation_hook(__FILE__, 'cab_shapecalculation_deactivate');

function cab_register_admin_menu() {
    add_submenu_page('edit.php', 'Canopyartbali Shape Calculation', 'Calculation Setting', 'manage_options', 'register_admin_menu', 'cab_custom_submenu_page_callback');
}

function cab_custom_submenu_page_callback() {
    if ( isset($_POST['cab-save']) ) {
        $data['price'] = $_POST['cab-price'];
        cab_shapecalculation_update_setting($data);
    }
    
    require_once CAB_PLUGIN_DIR . '/tpl.admin.form.php';
}

function cab_shapecalculation_shortcode($atts, $content = null) {
    $filename = CAB_PLUGIN_DIR . '/tpl.calculation.php';

    $f = @fopen($filename, 'r');

    while (!feof($f))
        $content .= fread($f, filesize($filename));
    fclose($f);
    $content = str_replace("{{canopysettingprice}}", 300000, $content);
    $content = str_replace("{{plugin_rul}}", CAB_PLUGIN_URL, $content);
    return '<span class="CABShapeCalculation">' . $content . '</span>';
}

function cab_shapecalculation_load_setting() {
    return get_option('cab_shapecalculation_setting');
}

function cab_shapecalculation_update_setting($data) {
    $opt['price'] = $data['price'];
    update_option('cab_shapecalculation_setting', $opt);
}

function cab_shapecalculation_activate() {
    $opt['price'] = 300000;
    update_option('cab_shapecalculation_setting', $opt);
}

function cab_shapecalculation_deactivate() {
    delete_option('cab_shapecalculation_setting');
}

