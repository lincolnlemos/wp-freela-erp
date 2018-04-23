<?php

/**
 * Fired during plugin activation
 *
 * @link       wpfreelaerp.com
 * @since      1.0.0
 *
 * @package    Wp_Freela_Erp
 * @subpackage Wp_Freela_Erp/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_Freela_Erp
 * @subpackage Wp_Freela_Erp/includes
 * @author     Angolanos <hello@wpfreelaerp.com>
 */
class WF_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {


		/**
	     * Custom Post Types
	     */
	    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-freela-erp-post_types.php';
	    $plugin_post_types = new WF_Post_Types();
		$plugin_post_types->create_custom_post_type();
		flush_rewrite_rules();

	}

}
