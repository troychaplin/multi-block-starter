<?php
/**
 * Render the interactive block example on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 *
 * @package MultiBlockStarter
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Generates a unique id for aria-controls.
$multi_block_starter_unique_id = wp_unique_id( 'p-' );

// Adds the global state.
wp_interactivity_state(
	'interactivity',
	array(
		'isDark'    => false,
		'darkText'  => esc_html__( 'Switch to Light', 'multi-block-starter' ),
		'lightText' => esc_html__( 'Switch to Dark', 'multi-block-starter' ),
		'themeText' => esc_html__( 'Switch to Dark', 'multi-block-starter' ),
	)
);
?>

<div
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo get_block_wrapper_attributes();
	?>
	data-wp-interactive="interactivity"
	<?php echo esc_attr( wp_interactivity_data_wp_context( array( 'isOpen' => false ) ) ); ?>
	data-wp-watch="callbacks.logIsOpen"
	data-wp-class--dark-theme="state.isDark"
>
	<button
		data-wp-on--click="actions.toggleTheme"
		data-wp-text="state.themeText"
	></button>

	<button
		data-wp-on--click="actions.toggleOpen"
		data-wp-bind--aria-expanded="context.isOpen"
		aria-controls="<?php echo esc_attr( $multi_block_starter_unique_id ); ?>"
	>
		<?php esc_html_e( 'Toggle', 'multi-block-starter' ); ?>
	</button>

	<p
		id="<?php echo esc_attr( $multi_block_starter_unique_id ); ?>"
		data-wp-bind--hidden="!context.isOpen"
	>
		<?php
			esc_html_e( 'Example Interactive - hello from an interactive block!', 'multi-block-starter' );
		?>
	</p>
</div>
