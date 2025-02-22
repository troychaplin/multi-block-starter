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
		$plugin_assets = WP_PLUGIN_URL . '/wp-multi-block-starter/';
		return $plugin_assets;
	}

	/**
	 * Get the path to the plugin directory.
	 *
	 * @return string The path to the plugin directory.
	 */
	public static function plugin_path() {
		$plugin_assets = WP_PLUGIN_DIR . '/wp-multi-block-starter/';
		return $plugin_assets;
	}
}
