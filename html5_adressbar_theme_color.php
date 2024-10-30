<?php
/**
 * @package HTML5 Adressbar Theme Color
 * @version 0.2
 */
/*
Plugin Name: HTML5 Adressbar Theme Color
Plugin URI: https://wordpress.org/plugins/html5-adressbar-theme-color
Description: Change addressbar theme color for mobile browsers
Version: 0.2
Author: Gonzalo Diaz <devel@gon.cl>
Author URI: https://gon.cl/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: html5_adressbar_theme_color
*/

include( dirname(__FILE__) . '/options.php' );

function address_mobile_address_bar() {
    $options = get_option( 'html5_adressbar_theme_color_settings' );

    //this is for Chrome, Firefox OS, Opera and Vivaldi
    echo '<meta name="theme-color" content="'.$options['html5_adressbar_theme_color'].'" />';
    //Windows Phone **
    echo '<meta name="msapplication-navbutton-color" content="'.$options['html5_adressbar_theme_color'].'" />';
    // iOS Safari
    echo '<meta name="apple-mobile-web-app-capable" content="yes" />';
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />';
}
add_action( 'wp_head', 'address_mobile_address_bar' );
