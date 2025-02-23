import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	return (
		<p {...useBlockProps.save()}>
			{'Hero Banner (static block) on the frontend'}
		</p>
	);
}
