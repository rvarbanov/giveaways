<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.varbanov.me/
 * @since      1.0.0
 *
 * @package    Giveaways
 * @subpackage Giveaways/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Giveaways
 * @subpackage Giveaways/public
 * @author     Radi Varbanov <radi.varbanov+wp.giveaways@gmail.com>
 */
class Giveaways_Public {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since      1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Giveaways_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Giveaways_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/giveaways-public.css', array(), $this->version, 'all' );

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Giveaways_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Giveaways_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/giveaways-public.js', array( 'jquery' ), $this->version, false );

    }

    /**
     * Processes giveaways shortcode.
     *
     * @param   array       $atts   The attributes from the giveaways shortcode.
     *
     * @uses    get_option
     * @uses    get_layout
     *
     * @return  mixed   $output     Output of the buffer
     */
    public function giveaways_shortcode( $atts ) {
        require_once plugin_dir_path( __FILE__ ). 'partials/giveaways-public-display.php';
    }

}
