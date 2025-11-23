<?php
/**
 * Resolve paths and URLs relative to plugin directories.
 *
 * @package Veils_Of_Fate_Plugin
 */

namespace Veils_Of_Fate_Plugin;

/**
 * Class Plugin_Paths
 *
 * This class provides methods to handle and retrieve various paths related to the plugin.
 *
 * @package Veils_Of_Fate_Plugin
 */
class Plugin_Paths {

	/**
	 * Absolute path to a directory inside the plugin.
	 *
	 * @var string
	 */
	private string $plugin_dir;

	/**
	 * Setup the class.
	 *
	 * @param string $plugin_dir Absolute path to the plugin directory.
	 */
	public function __construct( string $plugin_dir ) {
		$this->plugin_dir = rtrim( $plugin_dir, '\\/' );
	}

	/**
	 * Get a URL for a path relative to the plugin directory.
	 *
	 * @param string|null $relative_path Optional. Relative path from the plugin directory.
	 *                                   Default null for the base plugin URL.
	 *
	 * @return string The full URL.
	 */
	public function get_url( ?string $relative_path = null ): string {
		if ( isset( $relative_path ) ) {
			return plugins_url( ltrim( $relative_path, '/' ), $this->plugin_dir . '/fake.file' );
		}

		return plugins_url( '', $this->plugin_dir . '/fake.file' );
	}

	/**
	 * Get the absolute path for a path relative to the plugin directory.
	 *
	 * @param string|null $relative_path Optional. Relative path from the plugin directory.
	 *                                   Default null for the base plugin path.
	 *
	 * @return string The full path.
	 */
	public function get_path( ?string $relative_path = null ): string {
		if ( isset( $relative_path ) ) {
			return $this->plugin_dir . '/' . ltrim( $relative_path, '/' );
		}

		return $this->plugin_dir;
	}

	/**
	 * Get the asset meta for a built asset file.
	 *
	 * @param string $asset_file Asset file name relative to the plugin directory.
	 *
	 * @return array|null Array with 'dependencies' and 'version' keys, or null if not found.
	 */
	public function get_asset_meta( string $asset_file ): ?array {
		$asset_path = $this->get_path( dirname( $asset_file ) . '/' . pathinfo( $asset_file, PATHINFO_FILENAME ) . '.asset.php' );

		if ( file_exists( $asset_path ) ) {
			$meta = include $asset_path;

			if ( is_array( $meta ) ) {
				return $meta;
			}
		}

		return null;
	}
}
