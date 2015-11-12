<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.varbanov.me/
 * @since             1.0.0
 * @package           Giveaways
 *
 * @wordpress-plugin
 * Plugin Name:       Giveaways
 * Plugin URI:        http://www.varbanov.me/plugins/giveaways/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Radi Varbanov
 * Author URI:        http://www.varbanov.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       giveaways
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-giveaways-activator.php
 */
function activate_giveaways() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-giveaways-activator.php';
    Giveaways_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-giveaways-deactivator.php
 */
function deactivate_giveaways() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-giveaways-deactivator.php';
    Giveaways_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_giveaways' );
register_deactivation_hook( __FILE__, 'deactivate_giveaways' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-giveaways.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_giveaways() {

    $plugin = new Giveaways();
    $plugin->run();

}
run_giveaways();
