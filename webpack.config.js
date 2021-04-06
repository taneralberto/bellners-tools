const path = require('path');

module.exports = {
    //mode: ""
    entry: {
        index: path.resolve(__dirname, './src/js/index.ts'),
    },
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist', 'js'),
    },
    resolve: {
        extensions: ['.ts', '.js'],
    },
    module: {
        rules: [
            {
                test: /\.ts?/,
                use: 'ts-loader',
                exclude: /node_modules/,
            }
        ]
    },
    /*watch: true,*/
    plugins: []
}