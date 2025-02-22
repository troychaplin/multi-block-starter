<?php
/**
 * Plugin Name:       Image Multi Block
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       image-multi-block
 *
 * @package ImageMultiBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Include Composer's autoload file.
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// Instantiate the classes.
$image_multi_block_classes = array(
	\ImageMultiBlock\PluginPaths::class,
	\ImageMultiBlock\RegisterBlocks::class,
);

foreach ( $image_multi_block_classes as $image_multi_block_class ) {
	new $image_multi_block_class();
}
