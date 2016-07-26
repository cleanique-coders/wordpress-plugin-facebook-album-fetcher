<?php

/**
 * Plugin Name:       Johawaki Slider
 * Description:       Simple Johawaki Slider
 * Version:           1.0.0
 * Author:            Nasrul Hazim
 * Author URI:        http://blog.nasrulhazim.com
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('JOHAWAKI_SLIDER_DIR', plugin_dir_path( __FILE__ ));
define('JOHAWAKI_SLIDER_URI', plugin_dir_url( __FILE__ ));

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-johawaki-slider.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-swiper-slider-activator.php
 */
function activate_swiper_slider() {
	$version = $plugin_data['Version'];

  // check WordPress version, if less than version we need, don't activate
  if ( version_compare( get_bloginfo( 'version' ), '4.0', '<' ) )
  {
    wp_die("You must use at least WordPress 4.1 to use this plugin!");
  }

  // If no record on plugin version, do create one
  if ( get_option( 'johawaki_slider_version' ) === false )
  {
    add_option( 'johawaki_slider_version', $version );
  } else if(get_option( 'johawaki_slider_version') < $version) { // else, do update the slider version
    update_option( 'johawaki_slider_version', $version ); 
  }
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-johawaki-slider-deactivator.php
 */
function deactivate_johawaki_slider() {
  // do nothing
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_johawaki_slider() {

  $plugin = new Johawaki_Slider();
  $plugin->run();

}

// register activation & deactivation hook
register_activation_hook( __FILE__, 'activate_johawaki_slider' );
register_deactivation_hook( __FILE__, 'deactivate_johawaki_slider' );

// Run the plugin
run_johawaki_slider();
