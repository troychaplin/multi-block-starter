import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();

	// eslint-disable-next-line no-console
	console.log( 'Edit', attributes, setAttributes );

	return (
		<p { ...blockProps }>
			{ __(
				'Example Interactive – hello from the editor!',
				'interactivity'
			) }
		</p>
	);
}
