const path = require('path');

module.exports = {
    mode: "development", // "production" | "development" | "none"
    entry: "./content/src/ts/", // string | object | array
    output: {
        path: path.resolve(__dirname, "./content/dist/js"), // string
        filename: "index.js", // string
    },
    devtool: "inline-source-map",
    module: {
        rules: [{
            test: /\.m?js$|\.tsx?$/,
            exclude: /(node_modules|bower_components)/,
            use: {
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env', '@babel/preset-typescript']
                }
            }
        }]
    },
    resolve: {
        extensions: ['.ts', '.js']
    }
};