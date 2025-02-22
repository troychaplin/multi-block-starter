<?php
/**
 * Plugin Name:       Multi Block Starter Plugin
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-multi-block
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Include Composer's autoload file.
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// Instantiate the classes.
$multi_block_classes = array(
	\MultiBlock\Enqueues::class,
	\MultiBlock\PluginPaths::class,
	\MultiBlock\RegisterBlocks::class,
);

foreach ( $multi_block_classes as $multi_block_class ) {
	new $multi_block_class();
}
