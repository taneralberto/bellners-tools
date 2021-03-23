const path = require('path');

module.exports = {
    //mode: ""
    entry: {
        index: path.resolve(__dirname, './src/js/index.js'),
    },
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist', 'js'),
    },
    module: {
        rules: []
    },
    plugins: []
}