<?php
/**
 * Plugin Name:       Veils of Fate Plugin
 * Description:       A plugin for the Veils of Fate WordPress RPG.
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Troy Chaplin
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       veils-of-fate-plugin
 *
 * @package Veils_Of_Fate_Plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Include our bundled autoload if not loaded globally.
if ( ! class_exists( Veils_Of_Fate_Plugin\Plugin_Paths::class ) && file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

if ( ! class_exists( Veils_Of_Fate_Plugin\Plugin_Paths::class ) ) {
	wp_trigger_error( 'Veils of Fate Plugin: Composer autoload file not found. Please run `composer install`.', E_USER_ERROR );
	return;
}

// Instantiate our modules.
$veils_of_fate_plugin_modules = array(
	new Veils_Of_Fate_Plugin\Register_Blocks( __DIR__ . '/build' ),
	new Veils_Of_Fate_Plugin\Enqueues( __DIR__ . '/build' ),
);


foreach ( $veils_of_fate_plugin_modules as $veils_of_fate_plugin_module ) {
	if ( is_a( $veils_of_fate_plugin_module, Veils_Of_Fate_Plugin\Plugin_Module::class ) ) {
		$veils_of_fate_plugin_module->init();
	}
}
