const [
	scriptConfig,
	moduleConfig,
] = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );

module.exports = [
	{
		...scriptConfig,
		entry: {
			...scriptConfig.entry(),
			'multi-block-editor': path.resolve(
				__dirname,
				'src/multi-block-editor.js'
			),
			'multi-block-frontend': path.resolve(
				__dirname,
				'src/multi-block-frontend.js'
			),
		},
	},
	moduleConfig,
];
