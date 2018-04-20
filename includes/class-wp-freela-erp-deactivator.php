<?php

/**
 * Fired during plugin deactivation
 *
 * @link       wpfreelaerp.com
 * @since      1.0.0
 *
 * @package    Wp_Freela_Erp
 * @subpackage Wp_Freela_Erp/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Wp_Freela_Erp
 * @subpackage Wp_Freela_Erp/includes
 * @author     Angolanos <hello@wpfreelaerp.com>
 */
class Wp_Freela_Erp_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		
	    flush_rewrite_rules();

	}

}
