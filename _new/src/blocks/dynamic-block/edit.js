/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
import './editor.scss';

export default function Edit() {
	const blockProps = useBlockProps();

	return (
		<p {...blockProps}>
			{__('Dynamic Block – hello from the editor!', 'dynamic-block')}
		</p>
	);
}
