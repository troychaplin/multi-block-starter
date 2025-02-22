const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );

module.exports = {
    ...defaultConfig,
    entry: {
        'multi-block-editor': [ path.resolve( __dirname, 'src/multi-block-editor.js' ) ],
        'multi-block-frontend': [ path.resolve( __dirname, 'src/multi-block-frontend.js' ) ],
    },
    output: {
        path: path.resolve( __dirname, 'build' ), filename: '[name].js',
    },
};