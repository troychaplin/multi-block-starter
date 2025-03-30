import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	return <p {...useBlockProps.save()}>{'Static block on the frontend'}</p>;
}
