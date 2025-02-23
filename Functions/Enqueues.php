<?php // phpcs:ignore Squiz.Commenting.FileComment.Missing

namespace MultiBlock;

use MultiBlock\PluginPaths;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class Enqueues
 *
 * This class is responsible for enqueueing scripts and styles for the plugin.
 *
 * @package MultiBlock
 */
class Enqueues {

	/**
	 * Constructor for the class.
	 */
	public function __construct() {
		add_action( 'enqueue_block_editor_assets', array( $this, 'multiblock_enqueue_block_assets' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'multiblock_enqueue_frontend_assets' ) );
	}

	/**
	 * Enqueues the block assets for the editor
	 */
	public function multiblock_enqueue_block_assets() {
		$asset_file = include PluginPaths::plugin_path() . 'build/multi-block-editor.asset.php';

		wp_enqueue_script(
			'multi-block-editor-js',
			PluginPaths::plugin_url() . 'build/multi-block-editor.js',
			$asset_file['dependencies'],
			$asset_file['version'],
			false
		);
	}

	/**
	 * Enqueues the block assets for the frontend
	 */
	public function multiblock_enqueue_frontend_assets() {
		$asset_file = include PluginPaths::plugin_path() . 'build/multi-block-frontend.asset.php';

		wp_enqueue_script(
			'multi-block-frontend-js',
			PluginPaths::plugin_url() . 'build/multi-block-frontend.js',
			$asset_file['dependencies'],
			$asset_file['version'],
			true
		);
	}
}
