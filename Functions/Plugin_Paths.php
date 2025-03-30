<?php // phpcs:ignore Squiz.Commenting.FileComment.Missing

namespace Multi_Block_Starter;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class Plugin_Paths
 *
 * This class provides methods to handle and retrieve various paths related to the plugin.
 *
 * @package Multi_Block_Starter
 */
class Plugin_Paths {

	/**
	 * Get the URL to the plugin directory.
	 *
	 * @return string The URL to the plugin directory.
	 */
	public static function plugin_url() {
		// Ensure the constant is defined before using it.
		if ( ! defined( 'MULTI_BLOCK_STARTER_URL' ) ) {
			return '';
		}
		return MULTI_BLOCK_STARTER_URL;
	}

	/**
	 * Get the path to the plugin directory.
	 *
	 * @return string The path to the plugin directory.
	 */
	public static function plugin_path() {
		// Ensure the constant is defined before using it.
		if ( ! defined( 'MULTI_BLOCK_STARTER_PATH' ) ) {
			return '';
		}
		return MULTI_BLOCK_STARTER_PATH;
	}
}
