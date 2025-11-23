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
			'veils-plugin-editor': path.resolve(
				__dirname,
				'src/veils-plugin-editor.js'
			),
			'veils-plugin-frontend': path.resolve(
				__dirname,
				'src/veils-plugin-frontend.js'
			),
		},
	},
	moduleConfig,
];
