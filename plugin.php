<?php
/**
 * Plugin Name:       Multi Block Starter Plugin
 * Description:       A starter configuration for creating a WordPress plugin with multiple blocks.
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Troy Chaplin
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       multi-block-starter
 *
 * @package Multi_Block_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Include our bundled autoload if not loaded globally.
if ( ! class_exists( Multi_Block_Starter\Plugin_Paths::class ) && file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

if ( ! class_exists( Multi_Block_Starter\Plugin_Paths::class ) ) {
	wp_trigger_error( 'Multi Block Starter Plugin: Composer autoload file not found. Please run `composer install`.', E_USER_ERROR );
	return;
}

// Instantiate our modules.
$multi_block_starter_modules = array(
	new Multi_Block_Starter\Register_Blocks( __DIR__ . '/build' ),
	new Multi_Block_Starter\Enqueues( __DIR__ . '/build' ),
);


foreach ( $multi_block_starter_modules as $multi_block_starter_module ) {
	if ( is_a( $multi_block_starter_module, Multi_Block_Starter\Plugin_Module::class ) ) {
		$multi_block_starter_module->init();
	}
}
