import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	return (
		<p {...useBlockProps.save()}>
			{'Block One – hello from the saved content!'}
		</p>
	);
}
