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

// Define plugin constants.
define( 'MULTI_BLOCK_STARTER_PATH', plugin_dir_path( __FILE__ ) );
define( 'MULTI_BLOCK_STARTER_URL', plugin_dir_url( __FILE__ ) );

// Include Composer's autoload file.
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// Instantiate the classes.
$multi_block_starter_classes = array(
	\Multi_Block_Starter\Enqueues::class,
	\Multi_Block_Starter\Plugin_Paths::class,
	\Multi_Block_Starter\Register_Blocks::class,
);

foreach ( $multi_block_starter_classes as $multi_block_starter_class ) {
	new $multi_block_starter_class();
}
