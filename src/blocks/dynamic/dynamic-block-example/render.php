<?php
/**
 * Dynamic block example.
 *
 * @package MultiBlockStarter
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<p <?php echo esc_attr( get_block_wrapper_attributes() ); ?>>
	<?php esc_html_e( 'Dynamic block on the frontend', 'multi-block-starter' ); ?>
</p>
