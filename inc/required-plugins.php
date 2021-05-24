<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Bellner for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';


add_action( 'tgmpa_register', 'bellner_register_required_plugins' );


function bellner_register_required_plugins() {

	$plugins = array(
		array(
			'name'      => 'WOOF – Products Filter for WooCommerce',
			'slug'      => 'woocommerce-products-filter',
			'required'  => true,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
		array(
			'name'      => 'FiboSearch - AJAX Search for WooCommerce',
			'slug'      => 'ajax-search-for-woocommerce',
			'required'  => true,
		),
		array(
			'name'      => 'User Profile Picture',
			'slug'      => 'metronet-profile-picture',
			'required'  => true,
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => true,
		),
		array(
			'name'      => 'WP Sitemap Page',
			'slug'      => 'wp-sitemap-page',
			'required'  => true,
		),
		array(

		),

	);
	$config = array(
		'id'           => 'bellner',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}