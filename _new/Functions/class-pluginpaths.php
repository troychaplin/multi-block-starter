<?php // phpcs:ignore Squiz.Commenting.FileComment.Missing

namespace ImageMultiBlock;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class PluginPaths
 *
 * This class provides methods to handle and retrieve various paths related to the plugin.
 *
 * @package ImageMultiBlock
 */
class PluginPaths {

	/**
	 * Get the URL to the plugin directory.
	 *
	 * @return string The URL to the plugin directory.
	 */
	public static function plugin_url() {
		$plugin_assets = WP_PLUGIN_URL . '/image-multi-block/';
		return $plugin_assets;
	}

	/**
	 * Get the path to the plugin directory.
	 *
	 * @return string The path to the plugin directory.
	 */
	public static function plugin_path() {
		$plugin_assets = WP_PLUGIN_DIR . '/image-multi-block/';
		return $plugin_assets;
	}
}
