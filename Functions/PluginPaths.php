<?php // phpcs:ignore Squiz.Commenting.FileComment.Missing

namespace MultiBlock;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class PluginPaths
 *
 * This class provides methods to handle and retrieve various paths related to the plugin.
 *
 * @package MultiBlock
 */
class PluginPaths {

	/**
	 * Get the URL to the plugin directory.
	 *
	 * @return string The URL to the plugin directory.
	 */
	public static function plugin_url() {
		// Ensure the constant is defined before using it.
		if ( ! defined( 'MULTI_BLOCK_URL' ) ) {
			return '';
		}
		return MULTI_BLOCK_URL;
	}

	/**
	 * Get the path to the plugin directory.
	 *
	 * @return string The path to the plugin directory.
	 */
	public static function plugin_path() {
		// Ensure the constant is defined before using it.
		if ( ! defined( 'MULTI_BLOCK_PATH' ) ) {
			return '';
		}
		return MULTI_BLOCK_PATH;
	}
}
