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
		wp_enqueue_script(
			'multi-block-editor-js',
			PluginPaths::plugin_url() . 'build/multi-block-editor.js',
			array( 'wp-blocks', 'wp-components', 'wp-data', 'wp-dom-ready', 'wp-edit-post', 'wp-element', 'wp-i18n', 'wp-plugins' ),
			'0.1.0',
			false
		);

		wp_enqueue_style(
			'multi-block-editor-css',
			PluginPaths::plugin_url() . 'build/multi-block-editor.css',
			array(),
			'0.1.0'
		);
	}


	/**
	 * Enqueues the block assets for the frontend
	 */
	public function multiblock_enqueue_frontend_assets() {
		wp_enqueue_script(
			'multi-block-frontend-js',
			PluginPaths::plugin_url() . 'build/multi-block-frontend.js',
			array(),
			'0.1.0',
			true
		);

		wp_enqueue_style(
			'multi-block-frontend-css',
			PluginPaths::plugin_url() . 'build/style-multi-block-editor.css',
			array(),
			'0.1.0'
		);
	}
}
