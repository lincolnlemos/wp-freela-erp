<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       wpfreelaerp.com
 * @since      1.0.0
 *
 * @package    Wp_Freela_Erp
 * @subpackage Wp_Freela_Erp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Freela_Erp
 * @subpackage Wp_Freela_Erp/includes
 * @author     Angolanos <hello@wpfreelaerp.com>
 */
class WF_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-freela-erp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
