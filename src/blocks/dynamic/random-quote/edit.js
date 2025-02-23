import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
	return (
		<p {...useBlockProps()}>
			{__(
				'Random Quote (dynamic block) in the editor',
				'wp-multi-block-starter'
			)}
		</p>
	);
}
